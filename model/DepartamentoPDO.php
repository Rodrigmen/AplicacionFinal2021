<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DepartamentoPDO
 *
 * @author daw2
 */
class DepartamentoPDO {

    public static function busquedaDepartamento($busqueda) {

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
        $oUsuario = null;

        $consulta = "Insert into T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_VolumenNegocio, T02_FechaCreacionDepartamento) values (?,?,?,?)";
        $passwordEncriptado = hash("sha256", ($codUsuario . $password)); // enctripta el password pasado como parametro
        $resultado = DBPDO::ejecutaConsulta($consulta, [$codUsuario, $descripcion, $passwordEncriptado, time()]);


        $consultaDatosUsuario = "Select * from T01_Usuario where T01_CodUsuario=?";
        $resultadoDatosUsuario = DBPDO::ejecutaConsulta($consultaDatosUsuario, [$codUsuario]); // guardo en la variabnle resultado el resultado que me devuelve la funcion que ejecuta la consulta con los paramtros pasados por parmetro

        if ($resultadoDatosUsuario->rowCount() > 0) { // si la consulta me devuleve algun resultado
            $oUsuarioConsulta = $resultadoDatosUsuario->fetchObject(); // guardo en la variable el resultado de la consulta en forma de objeto
            // instanciacion de un objeto Usuario con los datos del usuario
            $oUsuario = new Usuario($oUsuarioConsulta->T01_CodUsuario, $oUsuarioConsulta->T01_Password, $oUsuarioConsulta->T01_DescUsuario, $oUsuarioConsulta->T01_NumConexiones, $oUsuarioConsulta->T01_FechaHoraUltimaConexion, $oUsuarioConsulta->T01_Perfil, $oUsuarioConsulta->T01_ImagenUsuario);
        }

        return $oUsuario;
    }

}
