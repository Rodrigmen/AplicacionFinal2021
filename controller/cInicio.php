<?php

$titulo = $aLang[$_COOKIE['idioma']]['start'];
if (!isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])) { // si no se ha logueado le usuario
    header('Location: index.php'); // redirige al login
    exit;
}

if (isset($_REQUEST['cerrarSesion'])) { // si se ha pulsado el boton de Cerrar Sesion
    session_destroy(); // destruye todos los datos asociados a la sesion
    header("Location: index.php"); // redirige al login
    exit;
}
if (isset($_REQUEST['editProfile'])) {
    $_SESSION['paginaEnCurso'] = $controladores['editProfile'];
    header("Location: index.php");
    exit;
}

if (isset($_REQUEST['deleteAccount'])) {
    $_SESSION['paginaEnCurso'] = $controladores['deleteAccount'];
    header("Location: index.php");
    exit;
}
if (isset($_REQUEST['rest'])) {
    $_SESSION['paginaEnCurso'] = $controladores['rest'];
    header("Location: index.php");
    exit;
}
$usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
$CodUser = $usuarioActual->getCodUsuario();
$DescUser = $usuarioActual->getDescUsuario();
$Profile = $usuarioActual->getPerfil();
$ConexNumber = $usuarioActual->getNumConexiones();
$LastDateConex = date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion());

$vistaEnCurso = $vistas['inicio'];
require_once $vistas['layout'];
?>