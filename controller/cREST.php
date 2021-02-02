<?php

$titulo = "RESTs";
if (isset($_REQUEST['Volver'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
error_reporting(0);
if (isset($_REQUEST['Aceptar1'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $aServicioAPOD = REST::sevicioAPOD($_REQUEST['fecha']);
} else {
    //llamamos al servicio y le pasamos la fecha de hoy
    $aServicioAPOD = REST::sevicioAPOD(date('Y-m-d'));
}
error_reporting(-1);
if (is_null($aServicioAPOD)) {
    $tituloEnCurso = "¡Petición incorrecta o demasiadas peticiones!";
    $imagenEnCurso = null;
    $descripcionEnCurso = null;
} else {
    $tituloEnCurso = $aServicioAPOD['title'];
    $imagenEnCurso = $aServicioAPOD['url'];
    $descripcionEnCurso = $aServicioAPOD['explanation'];
}
if (isset($_REQUEST['Aceptar2'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $ValoresEquipo = REST::sacarEquipo($_REQUEST['numero']);
} else {
    $ValoresEquipo = null;
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
$vistaEnCurso = $vistas['rest']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout'];