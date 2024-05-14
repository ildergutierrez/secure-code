<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="icon" href="../img/Descargas-Seguras.png" />
</head>
<style>
    body {
        background: #b1c0c2;
    }

    .Donacion {
        position: fixed;
        width: 55px;
        height: 55px;
        line-height: 55px;
        bottom: 50%;
        /*bottom: 50%; Altura del boton*/
        background: #d9ddf1;
        right: 30px;
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
    <div class="container-fluid" style="padding: 0; ">
        <!-- MODAL -->
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
                    <div class="modal-body" style="background: #e0d4ed">
                        <form action="">
                            <input type="text" class="form-control" id="recipient-name" placeholder="Usuario" /><br />
                            <input type="password" class="form-control" id="recipient-name" placeholder="Contrsaeña" />
                    </div>
                    <div class="modal-footer" style="background: #e0d4ed">
                        <button type="button" class="btn btn-primary">
                            Iniciar sesión
                        </button></form>
                        <br />
                        <center><a href=""> Olvide mi contraseña</a></center>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN -->

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="
            background: #e1e3f7;
            position: fixed;
            z-index: 100;
            width: 100%;
            padding: 0;
          ">
                <div class="container-fluid" style="background: #060f63">
                    <a class="navbar-brand" href="../index.php"><img src="../img/icono.ico" alt="Logo" width="70px" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a style="color: #ffffff; font-size: 20px" class="nav-link" href="../index.php">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a style="color: #ffffff; font-size: 20px" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Codigos
                                </a>
                                <ul style="color: #ffffff; font-size: 20px" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="python.php">Python</a>
                                    </li>
                                    <li><a class="dropdown-item" href="Csharp.php">c#</a></li>
                                    <li><a class="dropdown-item" href="Java.php">Java</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="glosario.php">Glosario</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a style="color: #ffffff; font-size: 20px" class="nav-link" href="Nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #ffffff; font-size: 20px" class="nav-link" href="contactos.php">Contactos</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button style="color: #ffffff; font-size: 20px" class="btn btn-outline-info" type="button" data-bs-toggle="modal" data-bs-target="#modal-iniciar-sesion">
                                Iniciar sesión
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <!-- Donación -->
            <a href="https://www.paypal.com/donate/?hosted_button_id=G4MSNR6JU3PB2" target="_blank"><img class="Donacion" src="../img/donacion paypal.png" alt="Donacion" title="Donación" width="60px" /></a>
            <!-- Fin del boton de donación -->
            <br /><br />

    </div>
    <br>
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
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../Js/bootstrap.bundle.min.js"></script>

</html>