<?php

include("conexion_bd.php");

$sql = "SELECT * FROM Java";
$resultado = $conexion->query($sql);


$usuarios = array();

if ($resultado->num_rows > 0) {

    while ($fila = $resultado->fetch_assoc()) {
        $usuarios[] = $fila;
    }
}


echo json_encode($usuarios);


$conexion->close();
