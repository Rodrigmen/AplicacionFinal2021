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
    "rest"
];

foreach ($aCaminos as $direccion) {
    if (isset($_REQUEST[$direccion])) {
        switch ($direccion) {
            case 'cerrarSesion':
                session_destroy(); // destruye todos los datos asociados a la sesion
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
        }
        header("Location: index.php"); // redirige al login
    }
}
$usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
$CodUser = $usuarioActual->getCodUsuario();
$DescUser = $usuarioActual->getDescUsuario();
$Profile = $usuarioActual->getPerfil();
$ConexNumber = UsuarioPDO::obtenerNumConexion($CodUser);
$LastDateConex = date('d/m/Y H:i:s', UsuarioPDO::obtenerUltimaConexion($CodUser));

$vistaEnCurso = $vistas['inicio'];
require_once $vistas['layout'];
?>