<?php

$titulo = $aLang[$_COOKIE['idioma']]['deleteAccount'];

$usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
$CodUser = $usuarioActual->getCodUsuario();
$DescUser = $usuarioActual->getDescUsuario();
$Profile = $usuarioActual->getPerfil();
$ConexNumber = UsuarioPDO::obtenerNumConexion($CodUser);
$LastDateConex = date('d/m/Y H:i:s', UsuarioPDO::obtenerUltimaConexion($CodUser));
$aCaminos = [
    "Aceptar",
    "Cancelar"
];

foreach ($aCaminos as $direccion) {
    if (isset($_REQUEST[$direccion])) {
        switch ($direccion) {
            case 'Aceptar':
                UsuarioPDO::borrarUsuario($CodUser);
                session_destroy();
                $_SESSION['paginaEnCurso'] = $controladores['login'];
                break;
            case 'Cancelar':
                $_SESSION['paginaEnCurso'] = $controladores['inicio'];
                break;
        }
        header('Location: index.php');
    }    
}

$vistaEnCurso = $vistas['deleteAccount'];

require_once $vistas['layout'];