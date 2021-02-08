<?php

$titulo = "FinalApp2021";

if (isset($_REQUEST['Registrarse'])) { // si se ha pulsado el boton de registrarse
    $_SESSION['paginaEnCurso'] = $controladores['registro']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro

    header('Location: index.php');
    exit;
}

$vistaEnCurso = $vistas['principal']; // guardamos en la variable vistaEnCurso la vista que queremos implementar


require_once $vistas['layout'];
?> 