<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];
echo $tipo;

if ($tipo == null || $id == null) {
    header("Location: ../index.php");
    exit();
}
include 'conexion_bd.php';
$consulta = "SELECT * FROM $tipo WHERE id = '$id'";
$resultado = mysqli_query($conexion, $consulta);
if ($resultado) {
    $sql = "UPDATE $tipo SET `Nombre`='$nombre',`Descripcion`='$descripcion' WHERE  id = '$id'";
    $conexion->query($sql);
    header("Location: ../paginas/eliminar_codigo.php");
} else {
    echo '<script>';
    echo ' alert("Error al editar el registro"); ';
    echo ' window.location.href = "../paginas/eliminar_codigo.php"; ';
    echo '</script>';
}
$conexion->close();
