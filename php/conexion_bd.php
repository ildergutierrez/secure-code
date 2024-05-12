<?php
// Credenciales de la base de datos
session_start();

$BD_HOST = $_ENV['BD_HOST'];
$BD_USER = $_ENV['BD_USER'];
$BD_PASSWORD = $_ENV['BD_PASSWORD'];
$BD_NAME = $_ENV['BD_NAME'];
$BD_PORT = $_ENV['BD_PORT'];

$BD = mysqli_connect("$BD_HOST", "$BD_USER", "$BD_PASSWORD", "$BD_NAME", "$BD_PORT");
// $host = getenv('roundhouse.proxy.rlwy.net');
// $username = 'root';
// $password = 'foRywFWBeMEuYBfMvJhAWfzYBybpgGVI';
// $database =  getenv('railway');
// $port = '48465';

// // Conexión a la base de datos
// $conexion = mysqli_connect("$host", "$username", "$password", "$database", "$port");

// // Verificar la conexión
// if ($conexion->connect_error) {
//     die("Error de conexión: " . $conexion->connect_error);
// } else {
//     echo "Conexión exitosa";
// }
