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
$e_code = base64_encode($correo);
$verificacion = rand(100000, 999999);
$link = $_POST['link'];
$fecha = $_POST['Dato'];
$fecha1 = date('Y-m-d', strtotime($fecha));
$registro = date('Y-m-d');  
$fecha_nacimiento = new DateTime($fecha1);
$registro_n = new DateTime($registro);
$edad = $fecha_nacimiento->diff($registro_n)->y;

if ($edad < 16) {
    echo "
    <script>
    alert('por seguridad no se le permite el registro a menores de 16 años de edad, usted actualmente tiene $edad años de edad');
    location.href ='$link';
    </script>
    ";
    die;
} else if ($edad > 80) {
    echo "
    <script>
    alert('su edad no es acta para el registro, usted actualmente tiene $edad años de edad');
    location.href ='$link';
    </script>
    ";
    die;
}
// Continuar con el proceso de registro
$qerry = ("SELECT * FROM Usuarios Where Correo = '$correo'");
$resultado = mysqli_query($conexion, $qerry);

if (mysqli_num_rows($resultado) > 0) {
    echo "
    <script>
    alert('Su correo $correo ya existe');
    location.href ='$link';
    </script>
    ";
    die;
} else {

    $contra = password_hash($contrasena, PASSWORD_DEFAULT);
    $guardar = "INSERT INTO Usuarios(Nombre,Correo,contrasena,Fecha,ingreso,verificacion) VALUES ('$nombre','$correo','$contra','$fecha','$registro','$verificacion')";
    $entrega = mysqli_query($conexion, $guardar);
    if ($entrega) {
        $nombre = base64_encode($nombre);
        $verificacion = base64_encode($verificacion);
        echo "
    <script>
    alert('Registro exitoso');
    window.location.href = 'verificacion.php?email=$e_code &verificacion=$verificacion&nombre=$nombre';
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
