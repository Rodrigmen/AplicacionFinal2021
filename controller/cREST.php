<?php

$titulo = "RESTs";
if (isset($_REQUEST['Volver'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
error_reporting(0);
if (isset($_REQUEST['Aceptar'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $aServicioAPOD = REST::sevicioAPOD($_REQUEST['fecha']);
    $valorFecha = $_REQUEST['fecha'];
} else {
    //llamamos al servicio y le pasamos la fecha de hoy
    $aServicioAPOD = REST::sevicioAPOD(date('Y-m-d'));
    $valorFecha = date('Y-m-d');
}
error_reporting(-1);
if (is_null($aServicioAPOD)) {
    $tituloEnCurso = "¡Demasiadas peticiones!";
    $imagenEnCurso = "webroot/css/img/error429.jpg";
    $descripcionEnCurso = null;
} else {
    $tituloEnCurso = $aServicioAPOD['title'];
    $imagenEnCurso = $aServicioAPOD['url'];
    $descripcionEnCurso = $aServicioAPOD['explanation'];
}
if (isset($_REQUEST['Aceptar2'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $ValoresEquipo = REST::sacarEquipo($_REQUEST['numero']);
    $valorNumero = $_REQUEST['numero'];
} else {
    $ValoresEquipo = null;
    $valorNumero = "";
}
if (is_null($ValoresEquipo) || sizeof($ValoresEquipo) < 7) {
    $nombreEquipo = "¡No se ha pedido nada!";
    $abreviatura = null;
    $ciudad = null;
    $conferencia = null;
    $division = null;
} else {
    $nombreEquipo = $ValoresEquipo['full_name'];
    $abreviatura = "(" . $ValoresEquipo['abbreviation'] . ")";
    $ciudad = $ValoresEquipo['city'];
    $conferencia = $ValoresEquipo['conference'];
    $division = $ValoresEquipo['division'];
}
if (isset($_REQUEST['Aceptar3'])) {
    $mayus = REST::mayusculas($_REQUEST['cadena']);
    
    $valorCadena = $_REQUEST['cadena'];
} else {
    $valorCadena = "";
    $mayus = "¡No se ha introducido nada (Cacácteres especiales introducirlos en mayúscula[ej: Á])!";
}
if (isset($_REQUEST['Aceptar4'])) {
    $binario = REST::binarios($_REQUEST['numero2']);
    
    $valorNumero= $_REQUEST['numero2'];
} else {
    $valorNumero = "";
    $binario = "¡No se ha introducido nada!";
}
$vistaEnCurso = $vistas['rest']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout'];
