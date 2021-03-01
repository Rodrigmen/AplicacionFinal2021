<?php

$titulo = $aLang[$_COOKIE['idioma']]['start'];
if (!isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])) { // si no se ha logueado le usuario
    header('Location: index.php'); // redirige al login
    exit;
}
$aCaminos = [
    "cerrarSesion",
    "editProfile",
    "deleteAccount",
    "rest",
    "mantenimiento"
];

foreach ($aCaminos as $direccion) {
    if (isset($_REQUEST[$direccion])) {
        switch ($direccion) {
            case 'cerrarSesion':
                session_destroy(); // destruye todos los datos asociados a la sesion
                $_SESSION['paginaEnCurso'] = $controladores['principal'];
                break;
            case 'editProfile':
                $_SESSION['paginaEnCurso'] = $controladores['editProfile'];
                break;
            case 'deleteAccount':
                $_SESSION['paginaEnCurso'] = $controladores['deleteAccount'];
                break;
            case 'rest':
                $_SESSION['paginaEnCurso'] = $controladores['rest'];
                break;
            case 'mantenimiento':
                $_SESSION['paginaEnCurso'] = $controladores['mantenimiento'];
                break;
        }
        header("Location: index.php"); // redirige al login
    }
}
$usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
$CodUser = $usuarioActual->getCodUsuario();
$DescUser = $usuarioActual->getDescUsuario();
$Profile = $usuarioActual->getPerfil();
$ConexNumber = UsuarioPDO::obtenerNumConexion($CodUser);
if ($ConexNumber > 1) {
    $LastDateConex = date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion());
} else {
    $LastDateConex = null;
}


$vistaEnCurso = $vistas['inicio'];
require_once $vistas['layout'];