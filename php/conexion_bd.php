<?php
// Credenciales de la base de dato
$BD_HOST = "localhost";
$BD_USER = "root";
$BD_PASSWORD = "";
$BD_NAME = "secure code";
$BD_PORT = "";


$conexion = new mysqli($BD_HOST, $BD_USER, $BD_PASSWORD, $BD_NAME);


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}// else {
//     echo "Conexión exitosa";
// }
