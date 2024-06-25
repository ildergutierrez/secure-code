<?php
$conteo = 0;
$url = base64_decode($_GET['url']);
$id = base64_decode($_GET['id']);

if ($url == null || $id == null) {
    header("Location: ../index.php");
    exit();
}
include 'conexion_bd.php';
$consulta = "SELECT * FROM publicidad";
$resultado = $conexion->query($consulta);
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        if ($row['id'] == $id) {
            $conteo = $row['clic'];
            $conteo++;
        }
    }
    $sql = "UPDATE publicidad SET clic = '$conteo' WHERE id = '$id'";
    if ($conexion->query($sql) === TRUE) {
        header("Location: $url");
    } else {
        echo '<script>';
        echo ' window.close(); ';
        echo '</script>';
    }
    $conexion->close();
}
