<?php

$titulo = "FinalApp2021";
if (!isset($_COOKIE['idioma'])) {
    setcookie('idioma', 'es', time() + 2592000, "/proyectoDWES/AplicacionFinal2021/"); // crea la cookie 'idioma' con el valor 'es' para 30 dias
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['idiomaElegido'])) { // si se ha pulsado el botton de idiomaElegido
    setcookie('idioma', $_REQUEST['idiomaElegido'], time() + 2592000, "/proyectoDWES/AplicacionFinal2021/"); // modifica la cookie 'idioma' con el valor recibido del formulario para 30 dias
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['Registrarse'])) { // si se ha pulsado el boton de registrarse
    $_SESSION['paginaEnCurso'] = $controladores['registro']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro

    header('Location: index.php');
    exit;
}
if (isset($_REQUEST['IniciarSesion'])) { // si se ha pulsado el boton de registrarse
    $_SESSION['paginaEnCurso'] = $controladores['login']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro

    header('Location: index.php');
    exit;
}

$vistaEnCurso = $vistas['principal']; // guardamos en la variable vistaEnCurso la vista que queremos implementar


require_once $vistas['layout'];
?> 