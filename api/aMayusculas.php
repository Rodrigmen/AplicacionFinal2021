<?php

//http://192.168.1.240/proyectoDWES/AplicacionFinal2021/api/aMayusculas.php?cadena="hola"

header('Content-Type: application/json');
if (isset($_GET["cadena"])) {
    $resultado = strtoupper($_GET["cadena"]);
    echo json_encode($resultado);
}