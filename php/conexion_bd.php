<?php
// Credenciales de la base de datos
$host = "bbxd8bacgmzyocoj5nki-mysql.services.clever-cloud.com";
$username = "uja9uhnhl2m0ielz";
$password = "hv9KKkhOv2IFQp6aAZMW";
$database = "bbxd8bacgmzyocoj5nki";

// Conexión a la base de datos
$conexion = new mysqli($host, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} //else {
//     echo "Conexión exitosa";
// }

// Cierra la conexión
$conexion->close();
