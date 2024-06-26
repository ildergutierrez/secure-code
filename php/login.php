<?php
if (!isset($_POST['Email']) || !isset($_POST['password']) || !isset($_POST['direccion']) || !isset($_POST['error'])) {
    header("Location: ../index.php");
    exit();
}
include('conexion_bd.php');
$no = "";
$id_user = "";
$nombre = $_POST['Email'];
$error = $_POST['error'];
$direccion = $_POST['direccion'];
$contrasena = $_POST['password'];
$correo = base64_encode($nombre);
$qerry = "SELECT * FROM Usuarios Where Correo = '$nombre'";

$busqueda = mysqli_query($conexion, $qerry);

if ($busqueda && mysqli_num_rows($busqueda) > 0) {
    $fila = mysqli_fetch_assoc($busqueda);
    $contrasena_almacenada = $fila['contrasena'];
    $no = $fila['Nombre'];
    $id_user = $fila['id'];
    if (password_verify($contrasena, $contrasena_almacenada)) {
        if ($fila['verificacion'] == '1') {
            session_start();
            $_SESSION['Email'] = $nombre;
            $_SESSION['nombre'] = trim($no);
            $_SESSION['id_user'] = trim($id_user);
            header("Location: $direccion");
        } else {
            echo "<script>
           window.location.href = '../paginas/verificar.php?email=$correo';
            </script>";
        }
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
