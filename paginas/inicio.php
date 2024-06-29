<?php
session_start();
if (!isset($_SESSION['Email'])) {
    $inicio = "../index.php";
    echo "<script>
        location.href = '$inicio';
        </script>";
}
$usuario =  $_SESSION['nombre'];
$id = $_SESSION['id_user'];
include("../php/publicidad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Secure Code</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
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

    .scrollable {
        max-height: 600px;
        overflow-x: hidden;
        overflow-y: auto;

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
                <a class="navbar-brand" href="#"><img src="../img/icono.ico" alt="Logo" width="70px" style="border-radius: 100%;" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a style="color: #000000; font-size: 20px" class="nav-link" href="#">Inicio</a>
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
    <div class="container-md">
        <!-- Publicidad -->
        <div class="container-md">
            <?php p1() ?>
        </div>
        <div class="container-md">
            <?php p2() ?>
        </div>
    </div>
    <main>
        <br><br>
        <!-- Donación -->
        <a href="https://www.paypal.com/donate/?hosted_button_id=G4MSNR6JU3PB2" target="_blank"><img class="Donacion" src="../img/donacion paypal.png" alt="Donacion" title="Donación" width="60px" /></a>
        <!-- Fin del boton de donación -->
        <?php include("../php/conexion_bd.php"); ?>

        <div class="container" style="width: 77%; padding: 0; background: #cfe2ff;">
            <div class="container" style=" background: lightgray; border-radius: 15px">
                <div class="container" style="  border-radius: 15px; padding: 35px; text-align: justify; ">
                    <div class="row" style="padding: 5px; background: #e1e3f7; border-radius: 15px; overflow: hidden;">
                        <div class="col-md-3 " style="padding: 8px; background: #e1e3f7; border-radius: 15px;">
                            <h4><i>Tus Codigos</i></h4>
                            <br>
                            <div id="accordion" style="width: 90%;">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                            Python
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <?php
                                            $pyton = "SELECT * FROM `python`";
                                            $p_r = mysqli_query($conexion, $pyton);
                                            if ($p_r && mysqli_num_rows($p_r) > 0) {
                                                while ($f_p = mysqli_fetch_assoc($p_r)) {
                                                    if ($f_p['id_Autor'] === $id) { ?>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <a href="Accion.php?rt=<?php echo base64_encode($f_p['id']) ?>&tipo=<?php echo base64_encode('python') ?>" target="_blank"> <b> <?php echo htmlspecialchars($f_p['Nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                                                    </b></a>
                                                                <br>
                                                            </div>
                                                        </div>
                                            <?php  }
                                                }
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
                                            <?php
                                            $cshar = "SELECT * FROM `csharp`";
                                            $c_r = mysqli_query($conexion, $cshar);
                                            if ($c_r && mysqli_num_rows($c_r) > 0) {
                                                while ($f_c = mysqli_fetch_assoc($c_r)) {
                                                    if ($f_c['id_Autor'] === $id) { ?>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <a href="Accion.php?rt=<?php echo base64_encode($f_c['id']) ?>&tipo=<?php echo base64_encode('csharp') ?>" target="_blank"> <b> <?php echo htmlspecialchars($f_c['Nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                                                    </b></a>
                                                                <br>
                                                            </div>
                                                        </div>
                                            <?php  }
                                                }
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
                                            <?php
                                            $Java_b = "SELECT * FROM `java`";
                                            $j_r = mysqli_query($conexion, $Java_b);
                                            if ($j_r && mysqli_num_rows($j_r) > 0) {
                                                while ($f_j = mysqli_fetch_assoc($j_r)) {
                                                    if ($f_j['id_Autor'] === $id) { ?>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <a href="Accion.php?rt=<?php echo base64_encode($f_j['id']) ?>&tipo=<?php echo base64_encode('java') ?>" target="_blank"> <b> <?php echo htmlspecialchars($f_j['Nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                                                    </b></a>
                                                                <br>
                                                            </div>
                                                        </div>
                                            <?php  }
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <a href="eliminar_codigo.php" class="btn btn-secondary">Todos</a>
                        </div>
                        <div class="col-md-6  scrollable" style="padding: 20px; background: #ffffff ; text-align: justify;">
                            <center>
                                <h3>Noticias tecnologicas</h3>
                            </center> <br>
                            <?php
                            $ns = 0;
                            $noticia = "SELECT * FROM `noticias` ORDER BY `id` DESC";
                            $tabla_noticia = mysqli_query($conexion, $noticia);
                            if ($tabla_noticia && mysqli_num_rows($tabla_noticia) > 0) {
                                while ($T_N = mysqli_fetch_assoc($tabla_noticia)) {
                            ?>
                                    <div class="row">
                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                            <img src="<?php echo $T_N['img'] ?>" alt="Noticia" width="100%" />
                                        </div>
                                        <div class="col-md-8">
                                            <p> <strong> <?php echo htmlspecialchars($T_N['titulo'], ENT_QUOTES, 'UTF-8'); ?></strong> <br> <?php echo htmlspecialchars($T_N['cuerpo'], ENT_QUOTES, 'UTF-8'); ?> <br>
                                                <a href="<?php echo $T_N['ruta'] ?>" target="_blank"> <b> Leer mas...
                                                    </b></a>
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                            <?php if ($ns === 4) {
                                        break;
                                    }
                                    $ns++;
                                }
                                echo "<center><a href='noticias.php' class='btn btn-secondary'>Todas las noticias...</a></center>";
                            } else {
                                echo "<center><h5>No hay noticias</h5></center>";
                            }
                            ?>
                        </div>
                        <div class="col-md-3" style="padding: 8px; padding-left: 20px; overflow: hidden;background: #e1e3f7; border-radius: 15px;">
                            <h4>Mas Populares</h4>
                            <br>
                            <i>
                                <h4>Python</h4>
                            </i>
                            <?php
                            $py = 0;
                            $pyton = "SELECT * FROM `python` ORDER BY `clic` DESC";
                            $p_r = mysqli_query($conexion, $pyton);
                            if ($p_r && mysqli_num_rows($p_r) > 0) {
                                while ($f_p = mysqli_fetch_assoc($p_r)) {
                            ?>

                                    <div class="row">
                                        <div class="col-md">
                                            <p> <a href="presentar_descripcion.php?rt=<?php echo base64_encode($f_p['id']) ?>&tipo=<?php echo base64_encode('python') ?>&ruta=<?php echo base64_encode($f_p['Acceso']) ?>" target="_blank"> <b> <?php echo htmlspecialchars($f_p['Nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                                    </b></a>
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                            <?php if ($py === 4) {
                                        break;
                                    }
                                    $py++;
                                }
                            }

                            ?>
                            <br>
                            <h4>C#</h4>
                            </i>
                            <?php
                            $c = 0;
                            $csh = "SELECT * FROM `csharp` ORDER BY `clic` DESC";
                            $p_r = mysqli_query($conexion, $csh);
                            if ($p_r && mysqli_num_rows($p_r) > 0) {
                                while ($f_p = mysqli_fetch_assoc($p_r)) {
                            ?>
                                    <div class="row">
                                        <div class="col-md">
                                            <p> <a href="presentar_descripcion.php?rt=<?php echo base64_encode($f_p['id']) ?>&tipo=<?php echo base64_encode('csharp') ?>&ruta=<?php echo base64_encode($f_p['Acceso']) ?>" target="_blank"> <b> <?php echo htmlspecialchars($f_p['Nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                                    </b></a>
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                            <?php if ($c === 4) {
                                        break;
                                    }
                                }
                            }
                            ?>
                            <br>
                            <h4>Java</h4>
                            </i>
                            <?php
                            $Java = "SELECT * FROM `java` ORDER BY `clic` DESC";
                            $p_r = mysqli_query($conexion, $Java);
                            if ($p_r && mysqli_num_rows($p_r) > 0) {
                                while ($f_p = mysqli_fetch_assoc($p_r)) {
                            ?>
                                    <div class="row">
                                        <div class="col-md">
                                            <p> <a href="presentar_descripcion.php?rt=<?php echo base64_encode($f_p['id']) ?>&tipo=<?php echo base64_encode('java') ?>&ruta=<?php echo base64_encode($f_p['Acceso']) ?>" target="_blank"> <b> <?php echo htmlspecialchars($f_p['Nombre'], ENT_QUOTES, 'UTF-8'); ?>
                                                    </b></a>
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                            <?php if ($py === 4) {
                                        break;
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
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