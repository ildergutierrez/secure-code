<?php $cont = 0;
$valor = 0;
$usuario = "";
session_start();
if (isset($_SESSION['Email'])) {
    $usuario = $_SESSION['nombre'];
}
include("../php/publicidad.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>C#</title>
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
        <!-- MODAL Inicio -->
        <div class="modal" tabindex="-1" id="modal-iniciar-sesion">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background: #6309c3">
                        <h5 class="modal-title" style="color: #ffffff">
                            <center>
                                <img src="../img/icono.ico" alt="Logo" style="border-radius: 100%; width: 30%" />
                                &ensp; Iniciar Sesión
                            </center>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="../php/login.php" method="post">
                        <input type="hidden" value="../paginas/Csharp.php" name="direccion">
                        <input type="hidden" value="../index.php" name="error">
                        <div class="modal-body" style="background: #e0d4ed">
                            <div class="form-floating mb-3">
                                <input type="email" name="Email" class="form-control" id="floatingInput" placeholder="secure@example.com" required>
                                <label for="floatingInput">Correo</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" id="password" name="password" class="form-control" id="floatingInput" placeholder="secure@example.com" required>
                                <label for="floatingInput">Contraseña</label>
                            </div>

                            <span onclick="PasswordVisibility()" class="btn" style="float: right; padding: 0;"><i><img src="../img/ver.png" width="50%" alt=""></i></span><br>
                        </div>
                        <div class="modal-footer" style="background: #e0d4ed; width: 100%;">

                            <center>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">
                                        Iniciar sesión
                                    </button>
                                </div>
                                <div class="col" style="font-size: 12px;">
                                    <a href="olvide_contrasena.php"> Olvide mi contraseña</a>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FIN -->
        <!-- MODAL Registro -->
        <div class="modal" tabindex="-1" id="modal-Registro">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background: #6309c3">
                        <h5 class="modal-title" style="color: #ffffff">
                            <center>
                                <img src="../img/icono.ico" alt="Logo" style="border-radius: 100%; width: 30%" />
                                &ensp; Registrarse
                            </center>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="php/Registro.php" method="post">
                        <div class="modal-body" style="background: #e0d4ed">
                            <div class="form-floating mb-3">
                                <input type="hidden" value="../index.php" name="link">
                                <input type="text" name="Nombre" class="form-control" id="floatingInput" placeholder="Jose Miguel Gutierrez Cruz" required>
                                <label for="floatingInput">Nombre completo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="Correo" class="form-control" id="floatingInput" placeholder="secure@example.com" required>
                                <label for="floatingInput">Correo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="password-in" name="Password-in" class="form-control" id="floatingInput" placeholder="*************" required>
                                <label for="floatingInput">Contraseña</label>
                                <span onclick="togglePasswordVisibility()" class="btn" style="float: right; padding: 0;"><i><img src="../img/ver.png" width="50%" alt=""></i></span><br>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="Dato" id="floatingInput" placeholder="A-M-D" required>
                                <label for="floatingInput">Fecha de nacimiento</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Aceptar Terminos y condiciones
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer" style="background: #e0d4ed">
                            <button type="submit" class="btn btn-primary">
                                Registrarse
                            </button>
                            <br />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #e1e3f7; position: fixed; z-index: 100;
            width: 100%;    padding: 0; ">
            <div class="container-fluid" style="background: rgb(210, 199, 249  )">
                <a class="navbar-brand" href="index.php"><img src="../img/icono.ico" alt="Logo" width="70px" style="border-radius: 100%;" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a style="color: #000000; font-size: 20px" class="nav-link" href="../index.php">Inicio</a>
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
                                    <a class="dropdown-item" href="#">c#</a>
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
                    <?php if (isset($_SESSION['Email'])) { ?>
                        <form class="d-flex">
                            <label class="lead" style="text-align: right;  background: transparent; border: none;"><?php echo $usuario ?></label> &nbsp; &nbsp;
                            <a class="btn btn-outline-secondary" href="subir_codigo.php">Subir Codigo </a> &ensp;&ensp;
                            <a class="btn btn-outline-secondary" href="eliminar_codigo.php">Eliminar Codigo </a> &ensp;&ensp;
                            <a href="../php/cerrar_sesion.php" class="btn btn-outline-secondary">Cerrar sesión</a> &ensp;&ensp;
                        </form><?php } else { ?>
                        <form class="d-flex">
                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modal-iniciar-sesion">
                                Iniciar sesión
                            </button>
                            &ensp;&ensp;
                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modal-Registro">
                                Registro
                            </button>
                            <!-- <label for="recipient-name" class="col-form-label"><a href="" style="text-decoration: none; border: solid 1px #000000;">Registrar</a></label> -->

                        </form><?php } ?>
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
        <div class="container-md">
            <!-- Publicidad -->
            <div class="container-md">
                <?php p1() ?>
            </div>
            <div class="container-md">
                <?php p2() ?>
            </div>

        </div>
        <div class="container-md" style="width: 80%;">
            <div class="container" style="background: #fff; border-radius: 15px">
                <br />
                <div class="container" style="width: 90%">
                    <center>
                        <img src="../img/csharo-trabajos.jpg" alt="Python" width="100%" height="300em" style="border-radius: 15px" />
                    </center>
                </div>
                <br /><br />
                <div class="container-md" style="padding: 30px">
                    <strong>C#</strong>(pronunciado "si sharp" en inglés) es un lenguaje de
                    programación moderno, basado en objetos y con seguridad de tipos.<strong>C#</strong>
                    permite a los desarrolladores crear muchos tipos de aplicaciones seguras
                    y sólidas que se ejecutan en<strong>.NET</strong>.
                    <br><br>
                    <strong>Codigos en C#</strong> listos para ser descargados...
                    <br /><br /><b>Nota: </b><i>Ten presente que si no conoces de programación es mejor que tengas un buen antivirus o no copiles los codigos, solo leelos.</i><br><br>
                </div>
                <div class="container" style="width: 95%; background: rgb(189, 165, 196); padding: 25px; border-radius: 15px;">
                    <div class="row">
                        <div class="md">
                            <table class="table  table-striped  " id="Tabla_usarios" style="border-radius: 15px;">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Publicado por</th>
                                        <th>Descargar</th>

                                    </tr>
                                </thead>
                                <tbody id="tablebody_usuario"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br><br><br>
            </div>
            <br>
        </div>
    </main>
    <footer>
        <div class="container" style="background: #000000; color:#ffffff; border-radius: 50px;">
            <p>
                <br>
                <center><img src="../img/ubicacion.png" alt="ubicacion" width="20px"> - Colombia &ensp; <img width="20px" src="../img/Descargas-Seguras.png" alt="logo">
                    - Desacargas Seguras <br><br>
                    <center>copyright: © Ilder Alberto Gutierrez Beleño</center>
                    **Toda donación que se realize esta destinada al pago de los servidores y mantenimiento de la
                    pagina, asi podemos asegurar que esta pagina
                    siga en funcionamiento.**
                </center><br>
            </p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Js/bootstrap.bundle.min.js"></script>
    <!-- Jquerry -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- data table -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script src="../Control/Csharp.js"></script>
    <script src="../Control/password.js"></script>
</body>

</html>