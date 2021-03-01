<?php

$titulo = $aLang[$_COOKIE['idioma']]['disable'] ." ". $_SESSION['codDepartamento'];

$oDepartamento = DepartamentoPDO::obtenerDepartamento($_SESSION['codDepartamento']);
$CodDep = $_SESSION['codDepartamento'];
$DescDep = $oDepartamento->T02_DescDepartamento;
$FechaCreacion = date('d/m/Y', $oDepartamento->T02_FechaCreacionDepartamento);
$VolDep = $oDepartamento->T02_VolumenNegocio;

if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['paginaEnCurso'] = $controladores['mantenimiento']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST['Aceptar']) && DepartamentoPDO::bajarDepartamento($_SESSION['codDepartamento'], $_REQUEST['fechaBaja'])) {
    
    $_SESSION['paginaEnCurso'] = $controladores['mantenimiento']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}
$vistaEnCurso = $vistas['bajaDepartamento'];

require_once $vistas['layout'];
