<?php
$conteo = 0;
$valor = 0;
$T_actual = 0;
$T_final = 0;
$url = base64_decode($_GET['url']);
$id = base64_decode($_GET['id']);

// echo $url . "---" . $id;
// exit();

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
            $valor = $row['V_Click'];
            $T_actual = $row['Total'];
            $T_final = $T_actual - $valor;
            $conteo++;
        }
    }
    if ($T_final < $valor) {
        $sql = "UPDATE publicidad SET `clic` = '$conteo',`Pagos`='0',`Total`='$T_final' WHERE id = '$id'";
    } else {
        $sql = "UPDATE publicidad SET `clic` = '$conteo',`Total`='$T_final' WHERE id = '$id'";
    }
    if ($conexion->query($sql) === TRUE) {
        header("Location: $url");
    } else {
        echo '<script>';
        echo ' window.close(); ';
        echo '</script>';
    }
    $conexion->close();
}
