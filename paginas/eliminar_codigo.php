<?php
session_start();
if (!isset($_SESSION['Email'])) {
    $inicio = "../index.php";
    echo "<script>
        alert('Para acceder debes iniciar sesión');
        location.href = '$inicio';
        </script>";
}
$usuario =  $_SESSION['nombre'];
$id = $_SESSION['id_user'];
$usuario = "";
$id = "1";
include("../php/conexion_bd.php");


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tus Codigos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- <link rel="" href=""/> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
    <link rel="icon" href="../img/Descargas-Seguras.png" />
</head>
<style>
    body {
        background-image: url("../img/fondo.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center;

    }

    .publicidad {
        position: fixed;
        width: 11%;
        height: 150px;
        top: 25%;
        background: transparent;
        border: none;
        left: 0;
        color: #cfe2ff;
        border-radius: 5%;
        box-shadow: 0px 1px 10px rgb(0, 0, 0, 0.3);

    }

    .publicidad:hover {
        width: 20%;
        height: 40%;
        z-index: 100;
    }

    .publicidad2 {
        position: fixed;
        width: 11%;
        height: 150px;
        line-height: 55px;
        top: 50%;
        background: transparent;
        border: none;
        right: 0;
        color: #cfe2ff;
        border-radius: 5%;
        box-shadow: 0px 1px 10px rgb(0, 0, 0, 0.3);
    }

    .publicidad2:hover {
        width: 20%;
        height: 40%;
        z-index: 100;
    }

    .Donacion {
        position: fixed;
        width: 55px;
        height: 55px;
        line-height: 55px;
        bottom: 55%;
        /*bottom: 50%; Altura del boton*/
        background: #d9ddf1;
        right: 1%;
        color: #cfe2ff;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 0px 1px 10px rgb(0, 0, 0, 0.3);
        z-index: 100;
    }

    .Donacion:hover {
        text-decoration: none;
        color: #89e8f5;
        background: #fff;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #e1e3f7; position: fixed; z-index: 100;
            width: 100%;    padding: 0; ">
            <div class="container-fluid" style="background: rgb(210, 199, 249  )">
                <a class="navbar-brand" href="inicio.php"><img src="../img/icono.ico" alt="Logo" width="70px" style="border-radius: 100%;" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a style="color: #000000; font-size: 20px" class="nav-link" href="inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="color: #000000; font-size: 20px" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Codigos
                            </a>
                            <ul style="color: #000000; font-size: 20px" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="python.php">Python</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="Csharp.php">c#</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="Java.php">Java</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="glosario.php">Glosario</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a style="color: #000000; font-size: 20px" class="nav-link" href="Nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #000000; font-size: 20px" class="nav-link" href="contactos.php">Contactos</a>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <label class="lead" style="text-align: right;  background: transparent; border: none;"><?php echo $usuario ?></label> &nbsp; &nbsp;
                        <a class="btn btn-outline-secondary" href="subir_codigo.php">Subir Codigo </a> &ensp;&ensp;
                        <a class="btn btn-outline-secondary" href="eliminar_codigo.php">Eliminar Codigo </a> &ensp;&ensp;
                        <a href="../php/cerrar_sesion.php" class="btn btn-outline-secondary">Cerrar sesión</a> &ensp;&ensp;
                    </form>
                </div> <br><br> <br>
            </div>
        </nav>
    </header>

    <main>
        <br><br> <br>
        <!-- Donación -->
        <a href="https://www.paypal.com/donate/?hosted_button_id=G4MSNR6JU3PB2" target="_blank"><img class="Donacion" src="../img/donacion paypal.png" alt="Donacion" title="Donación" width="60px" /></a>
        <!-- Fin del boton de donación -->

        <div class="container-md">
            <!-- Publicidad -->
            <?php
            $p1 = 0;
            $p2 = 0;
            $url1 = "";
            $url2 = "";
            $img1 = "";
            $img2 = "";
            $filas = 0;
            $sql = "SELECT * FROM publicidad";
            $resultado = mysqli_query($conexion, $sql);

            if ($resultado) {
                $filas = mysqli_num_rows($resultado);
            }

            if ($filas > 0) {
                $urls = array();
                while ($fila = mysqli_fetch_array($resultado)) {
                    if ($fila['Pagos'] > 0) {
                        $urls[] = $fila['id'];
                    }
                }
                if (count($urls) > 0) {
                    $p1 = rand(0, $filas - 1);
                    $p2 = rand(0, $filas - 1);
                } else {
                    $p1 = 0;
                    $p2 = 0;
                }
                if (count($urls) > 0) {
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
                }
            }

            $ruta = "https://raw.githubusercontent.com//ildergutierrez/imagenes/main/publicidad/";
            if (count($urls) > 0) {
            ?>
                <div class="container-md">
                    <a href="php/conteo.php?url=<?php echo base64_encode($url1) ?>&id=<?php echo base64_encode($urls[$p1]) ?>" target="_blank"> <img class="publicidad" src="<?php echo $ruta . $img1 ?>" alt="Publicidad"></a>
                </div>
                <div class="container-md">
                    <a href="php/conteo.php?url=<?php echo base64_encode($url2) ?> &id=<?php echo base64_encode($urls[$p2]) ?>" target="_blank"> <img class="publicidad2" src="<?php echo $ruta . $img2 ?>" alt="Publicidad"></img></a>
                </div>
            <?php } ?>
        </div>
        <div class="container" style="width: 77%; padding: 0; background: lightgray;">
            <center>
                <h1>Tus Codigos</h1>
            </center>
            <div class="container" style=" background: lightgray; border-radius: 15px">
                <div id="accordion" style="width: 90%; margin: auto;">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                Python
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h4> <b>Titulo</b></h4>
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-3">
                                        <h4> <b>Acciones</b></h4>
                                    </div>
                                </div>
                                <?php
                                $pyton = "SELECT * FROM `python`";
                                $p_r = mysqli_query($conexion, $pyton);
                                if ($p_r && mysqli_num_rows($p_r) > 0) {
                                    while ($f_p = mysqli_fetch_assoc($p_r)) {
                                        if ($f_p['id_Autor'] === $id) { ?>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <a href="Accion.php?rt=<?php echo base64_encode($f_p['id']) ?>&tipo=<?php echo base64_encode('python') ?>" target="_blank"> <b> <?php echo htmlspecialchars($f_p['Nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                                        </b></a>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Descargas: </b><?php echo $f_p['clic'] ?>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="edicion.php?rt=<?php echo base64_encode($f_p['id']) ?>&tabla=<?php echo base64_encode('python') ?>" class="btn btn-danger" title="Modificar" style="width: 40%;"><img src="https://cdn.pixabay.com/photo/2013/07/12/18/38/edit-153612_1280.png" alt="Modificar" title="Modificar" width="30%"></a>
                                                    <a href="../php/eliminar.php?tabla=<?php echo base64_encode('python') ?>&id=<?php echo base64_encode($f_p['id']) ?>" class="btn btn-primary" title="Eliminar" style="width: 40%;"><img src="https://cdn.pixabay.com/photo/2013/07/12/12/40/abort-146072_1280.png" alt="Eliminar" title="Eliminar" width="30%"></a>
                                                </div>
                                            </div> <br>
                                <?php  }
                                    }
                                } else {
                                    echo "No hay codigos";
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                C#
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h4> <b>Titulo</b></h4>
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-3">
                                        <h4> <b>Acciones</b></h4>
                                    </div>
                                </div>
                                <?php
                                $cshar = "SELECT * FROM `csharp`";
                                $c_r = mysqli_query($conexion, $cshar);
                                if ($c_r && mysqli_num_rows($c_r) > 0) {
                                    while ($f_c = mysqli_fetch_assoc($c_r)) {
                                        if ($f_c['id_Autor'] === $id) { ?>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <a href="Accion.php?rt=<?php echo base64_encode($f_c['id']) ?>&tipo=<?php echo base64_encode('csharp') ?>" target="_blank"> <b> <?php echo htmlspecialchars($f_c['Nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                                        </b></a>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Descargas: </b><?php echo $f_c['clic'] ?>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="edicion.php?rt=<?php echo base64_encode($f_p['id']) ?>&tabla=<?php echo base64_encode('csharp') ?>" class="btn btn-danger" title="Modificar" style="width: 40%;"><img src="https://cdn.pixabay.com/photo/2013/07/12/18/38/edit-153612_1280.png" alt="Modificar" title="Modificar" width="30%"></a>
                                                    <a href="../php/eliminar.php?tabla=<?php echo base64_encode('csharp') ?>&id=<?php echo base64_encode($f_p['id']) ?>" class="btn btn-primary" title="Eliminar" style="width: 40%;"><img src="https://cdn.pixabay.com/photo/2013/07/12/12/40/abort-146072_1280.png" alt="Eliminar" title="Eliminar" width="30%"></a>
                                                </div>
                                            </div> <br>

                                <?php  }
                                    }
                                } else {
                                    echo "No hay codigos";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                Java
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h4> <b>Titulo</b></h4>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-3">
                                        <h4> <b>Acciones</b></h4>
                                    </div>
                                </div>
                                <?php
                                $Java_b = "SELECT * FROM `java`";
                                $j_r = mysqli_query($conexion, $Java_b);
                                if ($j_r && mysqli_num_rows($j_r) > 0) {
                                    while ($f_j = mysqli_fetch_assoc($j_r)) {
                                        if ($f_j['id_Autor'] === $id) { ?>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <a href="Accion.php?rt=<?php echo base64_encode($f_p['id']) ?>&tipo=<?php echo base64_encode('java') ?>" target="_blank"> <b> <?php echo htmlspecialchars($f_p['Nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                                        </b></a>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Descargas: </b><?php echo $f_p['clic'] ?>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="edicion.php?rt=<?php echo base64_encode($f_p['id']) ?>&tabla=<?php echo base64_encode('java') ?>" class="btn btn-danger" title="Modificar" style="width: 40%;"><img src="https://cdn.pixabay.com/photo/2013/07/12/18/38/edit-153612_1280.png" alt="Modificar" title="Modificar" width="30%"></a>
                                                    <a href="../php/eliminar.php?tabla=<?php echo base64_encode('java') ?>&id=<?php echo base64_encode($f_p['id']) ?>" class="btn btn-primary" title="Eliminar" style="width: 40%;"><img src="https://cdn.pixabay.com/photo/2013/07/12/12/40/abort-146072_1280.png" alt="Eliminar" title="Eliminar" width="30%"></a>
                                                </div>
                                            </div> <br>
                                <?php  }
                                    }
                                } else {
                                    echo "No hay codigos";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </main>
    <br>
    <footer>
        <div class="container" style="background: #000000; color: #ffffff; border-radius: 50px">
            <p>
                <br />
                <center>
                    <img src="../img/ubicacion.png" alt="ubicacion" width="20px" /> -
                    Colombia &ensp;
                    <img width="20px" src="../img/Descargas-Seguras.png" alt="logo" /> -
                    Desacargas Seguras <br /><br />
                    <center>copyright: © Ilder Alberto Gutierrez Beleño</center>
                    **Toda donación que se realize esta destinada al pago de los
                    servidores y mantenimiento de la pagina, asi podemos asegurar que
                    esta pagina siga en funcionamiento.**
                </center>
            </p> <br>
        </div>
        <?php mysqli_close($conexion); ?>
    </footer>
    <script src="../Js/bootstrap.bundle.min.js"></script>
</body>

</html>