<?php
if ($tabla === null || $id === null) {
    header('Location: ../index.php');
    exit();
}
$tabla = base64_decode($_GET['tabla']);
$id =  base64_decode($_GET['id']);

include('conexion_bd.php');
$consulta = "DELETE FROM $tabla WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
if ($resultado) {
    $conexion->query($consulta);
    echo '<script>
    alert("el codigo se elimino correctamente");
    window.location.href = "../paginas/eliminar_codigo.php";
    </script>';
} else {
    echo '<script>
    alert("Error al eliminar el registro");
    window.location.href = "../paginas/eliminar_codigo.php";
    </script>';
}
$conexion->close();
