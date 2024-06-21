<?php
session_start();

if (!isset($_SESSION['Email'])) {
    $inicio = "../index.php";
    echo "<script>
        alert('Para acceder debes iniciar sesión');
        location.href = '$inicio';
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="icon" href="../img/Descargas-Seguras.png" />
</head>

<body>

</body>

</html>