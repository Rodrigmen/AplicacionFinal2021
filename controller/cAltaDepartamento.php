<?php

$titulo = $aLang[$_COOKIE['idioma']]['insert'];
if (isset($_REQUEST['Cancelar'])) {

    $_SESSION['paginaEnCurso'] = $controladores['mantenimiento']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}


define("OBLIGATORIO", 1); // defino e inicializo la constante a 1 para los campos que son obligatorios

$entradaOK = true;

$aErrores = [//declaro e inicializo el array de errores
    'EcodDep' => null,
    'EdescDep' => null,
    'EvolDep' => null,
];


if (isset($_REQUEST["Aceptar"])) { // comprueba que el usuario le ha dado a al boton de IniciarSesion y valida la entrada de todos los campos
    $aErrores['EcodDep'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['codigo'], 3, 3, OBLIGATORIO); // comprueba que la entrada del codigo de usuario es correcta

    if ($aErrores['EcodDep'] == null && !DepartamentoPDO::validarDepNoExiste($_REQUEST['codDep'])) { // si no ha habido error en el campo CodUsuario y que no exista el nombre de usuario en la base de datos
        $aErrores['EcodDep'] = "El código del departamento ya existe"; // guarda en el array de errores el men saje de error
    }

    $aErrores['EdescDep'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descDep'], 35, 1, OBLIGATORIO); // comprueba que la entrada del codigo de usuario es correcta

    $aErrores['EvolDep'] = validacionFormularios::comprobarEntero($_REQUEST['volDep'], PHP_INT_MAX, 1, REQUIRED);

    foreach ($aErrores as $campo => $error) { // recorro el array de errores
        if ($error != null) { // compruebo si hay algun mensaje de error en algun campo
            $entradaOK = false; // le doy el valor false a $entradaOK
            $_REQUEST[$campo] = ""; // si hay algun campo que tenga mensaje de error pongo $_REQUEST a null
        }
    }
} else { // si el usuario no le ha dado al boton de enviar
    $entradaOK = false; // le doy el valor false a $entradaOK
}

if ($entradaOK) { // si la entrada esta bien recojo los valores introducidos y hago su tratamiento
    DepartamentoPDO::insertarDepartamento($_REQUEST['codDep'], $_REQUEST['descDep'], $_REQUEST['volDep']);
    $_SESSION['paginaEnCurso'] = $controladores['mantenimiento']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del inicio
    header('Location: index.php'); // redirige al index.php
    exit;
}

$vistaEnCurso = $vistas['altaDepartamento']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

require_once $vistas['layout'];
