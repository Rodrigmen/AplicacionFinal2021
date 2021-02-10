<?php

//https://daw218.ieslossauces.es/proyectoDWES/AplicacionFinal2021/api/aMayusculas.php?cadena="hola"

header('Content-Type: application/json');
if (isset($_GET["cadena"])) {
    $resultado = strtoupper($_GET["cadena"]);
    echo json_encode($resultado);
}