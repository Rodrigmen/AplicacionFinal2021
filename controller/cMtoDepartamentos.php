<?php

$titulo = $aLang[$_COOKIE['idioma']]['maintenance'];

$aCaminos = [
    "Volver",
    "editarDepartamento",
    "eliminarDepartamento",
    "deshabilitarDepartamento",
    "habilitarDepartamento",
    "importar",
    "exportar"
];

foreach ($aCaminos as $direccion) {
    if (isset($_REQUEST[$direccion])) {
        switch ($direccion) {
            case 'Volver':
                session_destroy(); // destruye todos los datos asociados a la sesion
                $_SESSION['paginaEnCurso'] = $controladores['inicio'];
                break;
            case 'editarDepartamento':
                $_SESSION['paginaEnCurso'] = $controladores['modificarDepartamento'];
                break;
            case 'eliminarDepartamento':
                $_SESSION['paginaEnCurso'] = $controladores['eliminarDepartamento'];
                break;
            case 'deshabilitarDepartamento':
                $_SESSION['paginaEnCurso'] = $controladores['bajaDepartamento'];
                break;
            case 'habilitarDepartamento':
                $_SESSION['paginaEnCurso'] = $controladores['altaLogicaDepartamento'];
                break;
            case 'importar':
                DepartamentoPDO::importar();
                break;
            case 'exportar':
                DepartamentoPDO::exportar();
                break;
        }
        $_SESSION['codDepartamento'] = $_REQUEST[$direccion];
        header("Location: index.php"); // redirige al login
    }
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
