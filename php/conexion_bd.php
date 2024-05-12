<?php
// Credenciales de la base de datos
session_start();
echo"---------------------------------------------------------------------";
$BD_HOST = $_ENV['monorail.proxy.rlwy.net'];
$BD_USER = $_ENV['root'];
$BD_PASSWORD = $_ENV['NMASJkGOmTCTOUIFXxyrKnKpnqYrwgHl'];
$BD_NAME = $_ENV['railway'];
$BD_PORT = $_ENV['55101'];


$BD = mysqli_connect($BD_HOST,$BD_USER,$BD_PASSWORD,$BD_NAME,$BD_PORT);
// $host = getenv('roundhouse.proxy.rlwy.net');
// $username = 'root';
// $password = 'foRywFWBeMEuYBfMvJhAWfzYBybpgGVI';
// $database =  getenv('railway');
// $port = '48465';

// // Conexión a la base de datos
// $conexion = mysqli_connect("$host", "$username", "$password", "$database", "$port");

// Verificar la conexión
if ($BD->connect_error) {
    die("Error de conexión: " . $BD->connect_error);
} else {
    echo "Conexión exitosa";
}
?>