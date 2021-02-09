<?php

$titulo = $aLang[$_COOKIE['idioma']]['uppercase'];
$tituloEnCurso = $aLang[$_COOKIE['idioma']]['uppercase'];

if (isset($_REQUEST['Volver'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
if (isset($_REQUEST['Aceptar'])) {
    $mayus = REST::mayusculas($_REQUEST['cadena']);
} else {
    $mayus = "¡No se ha introducido nada!";
}
$vistaEnCurso = $vistas['mayus']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout'];