<?php

$titulo = $aLang[$_COOKIE['idioma']]['maintenance'];

if (isset($_REQUEST['Volver'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

if (isset($_REQUEST['buscar'])) {
    $descripcionBuscada = $_REQUEST['descripcion'];
} else {
    $descripcionBuscada = "";
}
$arrayDepartamentos = DepartamentoPDO::busquedaDepartamento($descripcionBuscada);

if (isset($_REQUEST['insertar'])) {
    $_SESSION['paginaEnCurso'] = $controladores['altaDepartamento']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}
$vistaEnCurso = $vistas['mantenimiento'];

require_once $vistas['layout'];
