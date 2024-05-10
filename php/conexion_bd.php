<?php
// Credenciales de la base de datos
$host = getenv('roundhouse.proxy.rlwy.net');
$username = "root";
$password = "foRywFWBeMEuYBfMvJhAWfzYBybpgGVI";
$database =  getenv('railway');

// Conexión a la base de datos
$conexion = mysqli_connect($host, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa";
}

