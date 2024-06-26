<?php
if (isset($_POST['contra'])) {
    include('conexion_bd.php');
    $contra = password_hash($_POST['contra'], PASSWORD_DEFAULT);
    $correo = base64_decode($_POST['correo']);
    $qerry = "UPDATE usuarios SET Contrasena = '$contra' WHERE Correo = '$correo'";
    $busqueda = mysqli_query($conexion, $qerry);
    if ($busqueda) {
        echo "<script>
        alert('Contraseña actualizada correctamente');
        location.href = '../index.php';
        </script>";
    } else {
        echo "<script>
        alert('Error al actualizar la contraseña');
        location.href = '../index.php';
        </script>";
    }
}
