<?php

/**
 * @author Susana Fabián Antón
 * @since 26/01/2021
 * @version 26/01/2021
 */
$titulo = "REST";
if (isset($_REQUEST['Volver'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
if (isset($_REQUEST['Aceptar1'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $aServicioAPOD = REST::sevicioAPOD($_REQUEST['fecha1']);
} else {
    //llamamos al servicio y le pasamos la fecha de hoy
    $aServicioAPOD = REST::sevicioAPOD(date('Y-m-d'));
}
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
    $aServicio19=REST::servicio19($_REQUEST['fecha2'], $_REQUEST['pais']);
} else {
    //llamamos al servicio y le pasamos la fecha de hoy
    $aServicio19 = REST::servicio19(date('Y-m-d'), "Italy");
}
var_dump($aServicio19);
if (is_null($aServicio19)) {
    $pais19 = "¡Petición incorrecta o demasiadas peticiones!";
    $descripcionEnCurso = null;
} else {
    $pais19 = $aServicio19['pais19'];
    $descripcionEnCurso = $aServicio19['explanation'];
}


$vistaEnCurso = $vistas['rest']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

require_once $vistas['layout'];
