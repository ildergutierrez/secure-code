<?php
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
