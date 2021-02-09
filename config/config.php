<?php
require_once "core/libreriaValidacion.php";

require_once "model/Usuario.php";
require_once "model/UsuarioPDO.php";
require_once "model/DBPDO.php";
require_once "model/REST.php";

$controladores = [
    "principal" => "controller/cPrincipal.php",
    "login" => "controller/cLogin.php",
    "inicio" => "controller/cInicio.php",
    "registro" => "controller/cRegistro.php",
    "editProfile" => "controller/cMiCuenta.php",
    "deleteAccount" => "controller/cBorrarCuenta.php",
    "rest"=>"controller/cREST.php",
    "mayus"=>"controller/cMayus.php"
];

$vistas = [
    "principal" => "view/vPrincipal.php",
    "layout" => "view/layout.php",
    "login" => "view/vLogin.php",
    "inicio" => "view/vInicio.php",
    "registro" => "view/vRegistro.php",
    "editProfile" => "view/vMiCuenta.php",
    "deleteAccount" => "view/vBorrarCuenta.php",
    "rest"=>"view/vREST.php",
    "mayus"=>"view/vMayus.php"
];

?>