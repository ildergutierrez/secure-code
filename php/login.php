<?php
include('conexion_bd.php');
$no = "";
$nombre = $_POST['Email'];
$error = $_POST['error'];
$direccion = $_POST['direccion'];
$contrasena = $_POST['password'];

$qerry = "SELECT * FROM Usuarios Where Correo = '$nombre'";

$busqueda = mysqli_query($conexion, $qerry);

if ($busqueda && mysqli_num_rows($busqueda) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    $contrasena_almacenada = $fila['contrasena'];
    $no = $fila['Nombre'];
    if (password_verify($contrasena, $contrasena_almacenada)) {
        session_start();
        $_SESSION['Email'] = $nombre;
        $_SESSION['nombre'] = trim($no);
        header("Location: $direccion");
    } else {
        echo "<script>
        alert('Usuario o contraseña incorrecta');
        location.href = '$error';
        </script>";
    }
} else {
    echo "<script>
        alert('Usuario o contraseña incorrecta');
        location.href = '$direccion';
        </script>";
}
$conexion->close();
