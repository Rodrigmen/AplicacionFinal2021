<?php


$usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
$CodUser = $usuarioActual->getCodUsuario();
$DescUser = $usuarioActual->getDescUsuario();
$Profile = $usuarioActual->getPerfil();
$ConexNumber = $usuarioActual->getNumConexiones();
$LastDateConex = date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion());
if (isset($_REQUEST['Cancelar'])) {

    $_SESSION['paginaEnCurso'] = $controladores['inicio'];
    header('Location: index.php');
    exit;
}


if (isset($_REQUEST["Aceptar"])) {
    UsuarioPDO::borrarUsuario($CodUser);
    session_destroy();
    $_SESSION['paginaEnCurso'] = $controladores['login'];

    header('Location: index.php');
    exit;
}


$vistaEnCurso = $vistas['deleteAccount'];

require_once $vistas['layout'];