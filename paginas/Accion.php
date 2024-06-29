<?php $cont = 0;
$valor = 0;
$usuario = "";
session_start();
if (isset($_SESSION['Email'])) {
    $usuario =  $_SESSION['nombre'];
} else {
    echo '<script>
    window.close();
    </script>';
}
$id = base64_decode($_GET['rt']);
$tipo = base64_decode($_GET['tipo']);
if ($id == null || $tipo == null) {
    echo '<script>
    alert("Error al intentar obtener el archivo");
    window.close();
    </script>';
}
include("../php/conexion_bd.php");
$consulta = "SELECT * FROM $tipo";
$resultado = $conexion->query($consulta);
if ($resultado->num_rows > 0) {
    while ($d_a = mysqli_fetch_assoc($resultado)) {
        if ($d_a['id'] === $id) {
            $nombre_p = $d_a['Nombre'];
            $descibir = $d_a['Descripcion'];
            $Autor = $d_a['Autor'];
            $Fecha =  $d_a['fecha'];
            $clic = $d_a['clic'];
            break;
        }
    }
    $conexion->close();
}
include("../php/publicidad.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Descargar Archivo</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- <link rel="" href=""/> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
    <link rel="icon" href="../img/Descargas-Seguras.png" />
</head>
<style>
    body {
        /* background: #0B1131; */
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
        /* line-height: 55px; */
        top: 25%;
        /*bottom: 50%; Altura del boton*/
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
        /*bottom: 50%; Altura del boton*/
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
    <div class="container-fluid" style="padding: 0">

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
                                        <a class="dropdown-item" href="#">Python</a>
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
            <!-- Donación -->
            <a href="https://www.paypal.com/donate/?hosted_button_id=G4MSNR6JU3PB2" target="_blank"><img class="Donacion" src="../img/donacion paypal.png" alt="Donacion" title="Donación" width="60px" /></a>
            <!-- Fin del boton de donación -->
            <br />
            <br />
            <div class="container" style="width: 87%;">
                <!-- Publicidad -->
                <div class="container-md">
                    <?php
                    p1();
                    ?>
                </div>
                <div class="container-md">
                    <?php
                    p2();
                    ?>
                </div>
            </div>
            <div class="container-md" style="background:#fff; width: 77%;">
                <br><br> <br><br>
                <div class="row">
                    <center>
                        <h1> <?php echo $nombre_p ?></h1>
                    </center>
                </div> <br><br>
                <div class="row" style="width: 90%; border-radius: 15px; background: #D8F7F2; margin: auto;">
                    <div class="col-md-9">
                        <div class="container-md" style="width: 90%; padding: 40px;">
                            <b>
                                <h3>
                                    <center>Descripción</center>
                                </h3>
                            </b>
                            <br>
                            <i> <?php echo $descibir ?></i>
                            <br><br>
                        </div>
                    </div>
                    <div class="col-md-3" style="border-left:solid 1px #000000;">
                        <br><b>Publicado por: </b><?php echo $Autor ?>
                        <br><br>
                        <b>Fecha de publicación: </b><?php echo $Fecha ?>
                        <br><br>
                        <b>N° Descargas: </b><?php echo $clic ?>
                        <br><br>
                        <a href="edicion.php?rt=<?php echo base64_encode($id) ?>&tabla=<?php echo base64_encode($tipo) ?>" class="btn btn-danger" title="Modificar" style="width: 40%;"><img src="https://cdn.pixabay.com/photo/2013/07/12/18/38/edit-153612_1280.png" alt="Modificar" title="Modificar" width="30%"></a>
                        <a href="../php/eliminar.php?tabla=<?php echo base64_encode($tipo) ?>&id=<?php echo base64_encode($id) ?>" class="btn btn-primary" title="Eliminar" style="width: 40%;"><img src="https://cdn.pixabay.com/photo/2013/07/12/12/40/abort-146072_1280.png" alt="Eliminar" title="Eliminar" width="30%"></a>
                    </div><br />
                </div>
                <br><br>
            </div>
            <br>
        </main>
        <footer>
            <div class="container" style="background: #000000; color: #ffffff; border-radius: 50px">
                <p>
                    <br />
                    <center>
                        <img src="../img/ubicacion.png" alt="ubicacion" width="20px" /> -
                        Colombia &ensp;
                        <img width="20px" src="../img/Descargas-Seguras.png" alt="logo" />
                        - Desacargas Seguras <br /><br />
                        <center>copyright: © Ilder Alberto Gutierrez Beleño</center>
                        **Toda donación que se realize esta destinada al pago de los
                        servidores y mantenimiento de la pagina, asi podemos asegurar que
                        esta pagina siga en funcionamiento.**
                    </center>
                    <br />
                </p>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Js/bootstrap.bundle.min.js"></script>
    <!-- Jquerry -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- data table -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="../Control/password.js"></script>
</body>

</html>