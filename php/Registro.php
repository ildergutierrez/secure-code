<?php
if (!isset($_POST['Nombre']) || !isset($_POST['Correo']) || !isset($_POST['Password']) || !isset($_POST['Dato']) || !isset($_POST['link'])) {
    header("Location: ../index.php");
    exit();
}
include('conexion_bd.php');
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$correo = strtolower($correo);
$contrasena = $_POST['Password'];
$fecha = $_POST['Dato'];
$link = $_POST['link'];
$contra = "";
$registro = date('Y-m-d');


$qerry = ("SELECT * FROM Usuarios Where Correo = '$correo'");
$resultado = mysqli_query($conexion, $qerry);

if (mysqli_num_rows($resultado) > 0) {
    echo "
    <script>
    alert('Su correo $correo ya existe');
    location.href ='$link';
    </script>
    ";
    exit();
} else {

    $contra = password_hash($contrasena, PASSWORD_DEFAULT);
    $guardar = "INSERT INTO Usuarios(Nombre,Correo,contrasena,Fecha,ingreso) VALUES ('$nombre','$correo','$contra','$fecha','$registro')";

    $entrega = mysqli_query($conexion, $guardar);
    if ($entrega) {
        echo "
    <script>
    alert('Registro exitoso');
    location.href ='$link';
    </script>
    ";
        exit();
    } else {
        echo "
        <script>
    alert('No se realizo el Registro, Ocurrio un error');
    location.href ='$link';
    </script>
    ";
    }
    exit();
}
$conexion->close();
