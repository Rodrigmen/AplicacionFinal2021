<?php

$titulo = $aLang[$_COOKIE['idioma']]['modify'] . $_SESSION['codDepartamento'];
if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['paginaEnCurso'] = $controladores['mantenimiento']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}

$oDepartamento = DepartamentoPDO::obtenerDepartamento($_SESSION['codDepartamento']);
$CodDep = $_SESSION['codDepartamento'];
$DescDep = $oDepartamento->T02_DescDepartamento;
if (!is_null($oDepartamento->T02_FechaBajaDepartamento)) {
    $FechaBaja = date('d/m/Y', $oDepartamento->T02_FechaBajaDepartamento);
}else{
   $FechaBaja = null; 
}
$FechaCreacion = date('d/m/Y', $oDepartamento->T02_FechaCreacionDepartamento);
$VolDep = $oDepartamento->T02_VolumenNegocio;


define("OBLIGATORIO", 1); // defino e inicializo la constante a 1 para los campos que son obligatorios

$entradaOK = true;

$aErrores = [//declaro e inicializo el array de errores
    'DescDep' => null,
    'VolDep' => null
];


if (isset($_REQUEST["Aceptar"])) { // comprueba que el usuario le ha dado a al boton de IniciarSesion y valida la entrada de todos los campos
    $aErrores['DescDep'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescDep'], 35, 3, OBLIGATORIO); // comprueba que la entrada del codigo de usuario es correcta
    $aErrores['VolDep'] = validacionFormularios::comprobarEntero($_REQUEST['VolDep'], PHP_INT_MAX, 1, OBLIGATORIO);

    foreach ($aErrores as $campo => $error) { // recorro el array de errores
        if ($error != null) { // compruebo si hay algun mensaje de error en algun campo
            $entradaOK = false; // le doy el valor false a $entradaOK
            $_REQUEST[$campo] = ""; // si hay algun campo que tenga mensaje de error pongo $_REQUEST a null
        }
    }
} else { // si el usuario no le ha dado al boton de enviar
    $entradaOK = false; // le doy el valor false a $entradaOK
}

if ($entradaOK && DepartamentoPDO::modificarDepartamento($_REQUEST['DescDep'], $_REQUEST['VolDep'], $_SESSION['codDepartamento'])) { // si la entrada esta bien recojo los valores introducidos y hago su tratamiento
    $_SESSION['paginaEnCurso'] = $controladores['mantenimiento']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del inicio

    header('Location: index.php'); // redirige al index.php
    exit;
}
$vistaEnCurso = $vistas['modificarDepartamento'];
require_once $vistas['layout'];
