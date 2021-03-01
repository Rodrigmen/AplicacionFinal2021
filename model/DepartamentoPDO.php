<?php

/**
 * Class DepartamentoPDO
 *
 * Clase cuyos métodos se encargan de realizar operaciones con los usuarios.
 * Es decir, consultas a la tabla T02_Departamento.
 * 
 * @author Rodrigo Robles Miñambres
 * @copyright 01-03-2021
 * @version 1.0
 */
class DepartamentoPDO {

    public static function exportar() {
        $fechaActual = date('Ymd'); // variable que almacena formateada la fecha actual
        $sentenciaSQL = "Select * from T02_Departamento";
        $resultadoConsulta = DBPDO::ejecutaConsulta($sentenciaSQL, []); // almacenamos en la variable $resultadoConsulta el resultado obtenido al ejecutar la consulta
        if ($resultadoConsulta != null) { // si se ha ejecutado la consulta
            $documentoXML = new DOMDocument("1.0", "utf-8"); // creo el objeto de tipo DOMDocument que recibe 2 parametros: ela version y la codificacion del XML que queremos crear
            $documentoXML->formatOutput = true; // establece la salida formateada
            $root = $documentoXML->appendChild($documentoXML->createElement('Departamentos')); // creo el nodo raiz
            $oDepartamento = $resultadoConsulta->fetchObject(); // Obtengo el primer registro de la consulta como un objeto
            while ($oDepartamento) { // recorro los registros que devuelve la consulta y por cada uno de ellos ejecuto el codigo siguiente
                $departamento = $root->appendChild($documentoXML->createElement('Departamento')); // creo el nodo para el departamento 
                $departamento->appendChild($documentoXML->createElement('CodDepartamento', $oDepartamento->T02_CodDepartamento)); // añado como hijo el codigo de departamento con su valor
                $departamento->appendChild($documentoXML->createElement('DescDepartamento', $oDepartamento->T02_DescDepartamento)); // añado como hijo la descripcion del departamento con su valor
                $departamento->appendChild($documentoXML->createElement('FechaCreacionDepartamento', $oDepartamento->T02_FechaCreacionDepartamento)); // añado como hijo la fecha de creacion del departamento con su valor
                $departamento->appendChild($documentoXML->createElement('VolumenNegocio', $oDepartamento->T02_VolumenNegocio)); // añado como hijo el volumen de negocio del departamento con su valor
                $departamento->appendChild($documentoXML->createElement('FechaBajaDepartamento', $oDepartamento->T02_FechaBajaDepartamento)); // añado como hijo la fecha de baja del departamento con su valor
                $oDepartamento = $resultadoConsulta->fetchObject(); // guardo el registro actual como un objeto y avanzo el puntero al siguiente registro de la consulta
            }
            $documentoXML->save('./tmp/' . $fechaActual . "DepartamentosR.xml"); // si se guarda el arbol XML en la ruta especificada con la fecha del dia que se ejecuta
            header('Content-Type: text/xml'); // indicamos que la salida será de tipo xml
            header("Content-Disposition: attachment; filename=" . $fechaActual . "DepartamentosR.xml"); // indicaremos que el archivo se va a descargar con el atributo attachment y que el nombre del fichero sera el valor de filename
            exit;
        }
    }

    public static function altaDepartamento($codigo) {
        $habilitado = false;
        $consulta = "UPDATE T02_Departamento SET T02_FechaBajaDepartamento=null WHERE T02_CodDepartamento=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codigo]);

        if ($resultado) {
            $habilitado = true;
        }
        return $habilitado;
    }

    public static function bajarDepartamento($codigo, $fechaBaja) {
        $fecha = new DateTime($fechaBaja);
        $deshabilitado = false;
        $consulta = "UPDATE T02_Departamento SET T02_FechaBajaDepartamento=? WHERE T02_CodDepartamento=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$fecha->getTimestamp(), $codigo]);

        if ($resultado) {
            $deshabilitado = true;
        }
        return $deshabilitado;
    }

    public static function borrarDepartamento($codigo) {
        $borrado = false;
        $consulta = "DELETE FROM T02_Departamento WHERE T02_CodDepartamento=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codigo]);

        if ($resultado) {
            $borrado = true;
        }
        return $borrado;
    }

    public static function obtenerDepartamento($codigo) {
        $consulta = "SELECT * FROM T02_Departamento WHERE T02_CodDepartamento=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codigo]);

        if ($resultado->rowCount() > 0) {
            $oDepartamento = $resultado->fetchObject();
        }
        return $oDepartamento;
    }

    public static function modificarDepartamento($descripcion, $volumen, $codigo) {
        $departamentoModificado = false; // declaramos e inicializamos $departamentoModificado a false

        $sentenciaSQL = "UPDATE T02_Departamento SET T02_DescDepartamento=?, T02_VolumenNegocio=? WHERE T02_CodDepartamento=?";
        $resultadoConsulta = DBPDO::ejecutaConsulta($sentenciaSQL, [$descripcion, $volumen, $codigo]); // almacenamos en la variable $resultadoConsulta el resultado obtenido al ejecutar la consulta

        if ($resultadoConsulta) { // si la consulta se ha ejecutado correctamente
            $departamentoModificado = true; // cambiamos el valor de la variable $departamentoModificado a true
        }

        return $departamentoModificado;
    }

    public static function busquedaDepartamento($busqueda) {
        $aDepartamentos = null;
        $consulta = "SELECT * FROM T02_Departamento WHERE T02_DescDepartamento LIKE CONCAT('%', ?, '%')";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$busqueda]);

        if ($resultado->rowCount() > 0) {
            $departamento = $resultado->fetchObject();
            $numDepartamento = 0; // declaramos e inicializamos el numero del departamento del array equivalente a la posicion del array

            while ($departamento) { // mientras haya algun departamento
                // Instanciamos un objeto Departamento con los datos devueltos por la consulta
                $oDepartamento = new Departamento($departamento->T02_CodDepartamento, $departamento->T02_DescDepartamento, $departamento->T02_FechaCreacionDepartamento, $departamento->T02_VolumenNegocio, $departamento->T02_FechaBajaDepartamento);
                $aDepartamentos[$numDepartamento] = $oDepartamento; // añadimos el objeto departamento en la posicion del array correspondiente
                $numDepartamento++; // incrementamos el numero del departamento equivalente a la posicion el array
                $departamento = $resultado->fetchObject(); // almacenamos el siguiente departamento devuelto por la consulta y avanzamos el puntero al siguiente departamento
            }
        }
        return $aDepartamentos;
    }

    public static function validarDepNoExiste($codDepartamento) {
        $departamentoNoExiste = true; // inicializo la variable booleana a true
        // comprueba que el usuario introducido existen en la base de datos
        $consulta = "Select * from T02_Departamento where T02_CodDepartamento=?";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codDepartamento]); // guardo en la variabnle resultado el resultado que me devuelve la funcion que ejecuta la consulta con los paramtros pasados por parmetro

        if ($resultado->rowCount() > 0) { // si la consulta me devuleve algun resultado
            $departamentoNoExiste = false; // inicializo la variable booleana a false
        }

        return $departamentoNoExiste;
    }

    public static function insertarDepartamento($codigo, $descripcion, $volumen) {
        $alta = false;

        $consulta = "Insert into T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_VolumenNegocio, T02_FechaCreacionDepartamento) values (?,?,?,?)";
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codigo, $descripcion, $volumen, time()]);

        if ($resultado) {
            $alta = true;
        }

        return $alta;
    }

}
