<?php
include('conexion_bd.php');
$p1 = 0;
$p2 = 0;
$r = 0;
$url1 = "";
$url2 = "";
$img1 = "";
$img2 = "";
$filas = 0;

$sqlp = "SELECT * FROM publicidad";
$resultado = mysqli_query($conexion, $sqlp);
if ($resultado) {
    $filas = mysqli_num_rows($resultado);
}
if ($filas > 0) {
    $urls = array();
    while ($Columna = mysqli_fetch_array($resultado)) {
        $nu = $Columna['Pagos'];
        if ($nu > 0) {
            $r = $Columna['id'];
            $urls[] = $r;
        }
    }
    if (count($urls) > 1) {
        $p1 = rand(0, $filas - 1);
        $p2 = rand(0, $filas - 1);
    } else {
        $p1 = $r;
        $p2 = $r;
    }

    if (count($urls) >  1) {
        for ($i = 0; $i < 2; $i++) {
            if ($i === 0) {
                $sql = "SELECT * FROM publicidad WHERE id = $urls[$p1]";
                $resultado = mysqli_query($conexion, $sql);
                $publicida = mysqli_fetch_array($resultado);
                $url1 = $publicida['Url'];
                $img1 = $publicida['imagen'];
            } else {
                $sql = "SELECT * FROM publicidad WHERE id = $urls[$p2]";
                $resultado = mysqli_query($conexion, $sql);
                $publicida = mysqli_fetch_array($resultado);
                $url2 = $publicida['Url'];
                $img2 = $publicida['imagen'];
            }
        }
    } else {
        // echo $r;
        if ($r > 0) {
            $sql = "SELECT * FROM publicidad WHERE id = $r";
            $resultado = mysqli_query($conexion, $sql);
            $publicida = mysqli_fetch_array($resultado);
            $url1 = $publicida['Url'];
            $img1 = $publicida['imagen'];
            $img2 = $img1;
            $url2 = $url1;
            $p2 = $r;
            $p1 = $r;
            // echo $img1 . " " . $img2 . " " . $url1 . " " . $url2 . " " . $p1 . " " . $p2;
        }
    }
}
mysqli_close($conexion);
$ruta = "https://raw.githubusercontent.com//ildergutierrez/imagenes/main/publicidad/";
function mostrarPublicidad($url, $imgen, $ruta, $id, $n)
{
    $url_envio = base64_encode($url);
    $id_envio = base64_encode($id);
    $direccion = $ruta . $imgen;
    if ($n === 1) {
        echo "
    <a href='php/conteo.php?url=$url_envio &id=$id_envio' target='_blank'> <img class='publicidad' src='$direccion' alt='Publicidad'></a>
    ";
    } else {
        echo "
    <a href='php/conteo.php?url=$url_envio &id=$id_envio' target='_blank'> <img class='publicidad2' src='$direccion' alt='Publicidad'></a>
    ";
    }
}



function p1()
{
    global $url1, $img1, $ruta, $p1, $urls;
    if (count($urls) > 1) {
        mostrarPublicidad($url1, $img1, $ruta, $urls[$p1], 1);
    }
    if (count($urls) == 1) {
        mostrarPublicidad($url1, $img1, $ruta, $p1, 1);
    }
}
function p2()
{
    global $url2, $img2, $ruta, $p2, $urls;
    if (count($urls) > 1) {
        mostrarPublicidad($url2, $img2, $ruta, $urls[$p2], 2);
    }
    if (count($urls) == 1) {
        mostrarPublicidad($url2, $img2, $ruta, $p2, 2);
    }
}
