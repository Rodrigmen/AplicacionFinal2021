<?php

//https://daw218.ieslossauces.es/proyectoDWES/AplicacionFinal2021/api/aMayusculas.php?cadena="hola"

header('Content-Type: application/json');
if (isset($_GET["cadena"])) {
    $resultado = mb_strtoupper($_GET["cadena"],'utf-8');
    echo json_encode($resultado);
}