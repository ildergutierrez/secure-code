<?php
// Credenciales de la base de dato
$BD_HOST = "monorail.proxy.rlwy.net";
$BD_USER = "root";
$BD_PASSWORD = "NMASJkGOmTCTOUIFXxyrKnKpnqYrwgHl";
$BD_NAME = "railway";
$BD_PORT = "55101";


$conexion = mysqli_connect($BD_HOST, $BD_USER, $BD_PASSWORD, $BD_NAME, $BD_PORT);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
 }// else {
//     echo "Conexión exitosa";
// }
