<?php
if (isset($_GET['email']) && isset($_GET['verificacion'])) {
    include('conexion_bd.php');
    $correo = base64_decode($_GET['email']);
    $verificacion = $_GET['verificacion'];
    $qerry = "SELECT * FROM Usuarios Where Correo = '$correo'";
    $busqueda = mysqli_query($conexion, $qerry);
    if ($busqueda && mysqli_num_rows($busqueda) > 0) {
        $fila = mysqli_fetch_assoc($busqueda);
        if ($fila['verificacion'] == $verificacion) {
            $qerry = "UPDATE usuarios SET verificacion = '1' WHERE Correo = '$correo'";
            $busqueda = mysqli_query($conexion, $qerry);
            if ($busqueda) {
                echo "<script>
                alert('Cuenta verificada correctamente');
                location.href = '../index.php';
                </script>";
            } else {
                echo "<script>
                alert('Error al verificar la cuenta');
                location.href = '../index.php';
                </script>";
            }
        } else {
            echo "<script>
            alert('Código de verificación incorrecto');
            location.href = '../index.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('Usuario no encontrado');
        location.href = '../index.php';
        </script>";
    }
} else {
    echo "<script>
    location.href = '../index.php';
    </script>";
}
