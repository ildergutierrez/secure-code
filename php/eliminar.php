<?php

$tabla = base64_decode($_GET['tabla']);
$id =  base64_decode($_GET['id']);

if ($tabla === null || $id === null) {
    header('Location: ../index.php');
    exit();
}

if ($tabla == "csharp") {
    $archivo = '../codigo/c/';
}
if ($tabla == "java") {
    $archivo = '../codigo/java/';
}
if ($tabla == "python") {
    $archivo = '../codigo/py/';
}
include('conexion_bd.php');
$consulta = "SELECT * FROM $tabla WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
if ($resultado && mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    if ($id == $fila['id']) {
        $complemento = $fila['Acceso'];
        $ruta_archivo = $archivo . $complemento;
        try {
            if (unlink($ruta_archivo)) {
                $eliminar = "DELETE FROM $tabla WHERE id = $id";
                $conexion->query($eliminar);
                echo '<script>
            alert("el codigo se elimino correctamente");
            window.location.href = "../paginas/eliminar_codigo.php";
            </script>';
            } else {
                echo '<script>
            alert("No se pudo eliminar el archivo. Verifica los permisos.");
            window.location.href = "../paginas/eliminar_codigo.php";
            </script>';
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
            echo "<script>

            alert('Error al eliminar el archivo $error');
            </script>";
        }
    }
} else {
    echo '<script>
    alert("Error al eliminar el registro");
    window.location.href = "../paginas/eliminar_codigo.php";
    </script>';
}
$conexion->close();
