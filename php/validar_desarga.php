<?php
session_start();
if (!isset($_SESSION['Email'])) {
    echo "<script>
 alert('Para acceder al link de descarga debes iniciar sesion');
 window.close();
 </script>";
    exit();
}
$conteo = 0;
$url =  base64_decode($_GET['ruta']);
$id = base64_decode($_GET['rt']);
$tipo = base64_decode($_GET['tipo']);
if ($tipo == "csharp") {
    $carpeta = '../codigo/c/';
}
if ($tipo == "java") {
    $carpeta = '../codigo/java/';
}
if ($tipo == "python") {
    $carpeta = '../codigo/py/';
}
$acceso = $carpeta . $url;

if ($url == null || $id == null || $tipo == null) {
    header("Location: ../index.php");
} else {
    include 'conexion_bd.php';
    $consulta = "SELECT * FROM $tipo";
    $resultado = $conexion->query($consulta);
    if ($resultado->num_rows > 0) {

        while ($row = $resultado->fetch_assoc()) {
            if ($row['id'] == $id) {
                $conteo = $row['clic'];
                $conteo++;
            }
        }
        $sql = "UPDATE $tipo SET clic = '$conteo' WHERE id = '$id'";
        if ($conexion->query($sql) === TRUE) {
            header("Location: $acceso");
        } else {
            echo '<script>';
            echo ' window.close();';
            echo '</scrip>';
        }
        $conexion->close();
    }
}
