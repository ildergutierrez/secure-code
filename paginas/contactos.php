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
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="
            background: #e1e3f7;
            position: fixed;
            z-index: 100;
            width: 100%;
            padding: 0;
          ">
                <div class="container-fluid" style="background: #060f63; ">
                    <a class="navbar-brand" href="../index.html"><img src="../img/icono-pagina-Descargas-seguras.png"
                            alt="Logo" style="width: 50px; border-radius: 30px" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../index.html"
                                    style="color: #ffffff; font-size: 20px;">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    style="color: #ffffff; font-size: 20px;">
                                    Codigos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">C#</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Python</a>
                                    </li>
                                    <a class="dropdown-item" href="#">Java</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            </li>
                            <a class="dropdown-item" href="glosario.html">Glosario</a>
                            </li>
                        </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #ffffff; font-size: 20px;">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #ffffff; font-size: 20px;">Contacto</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <!-- Donación -->
            <a href="https://www.paypal.com/donate/?hosted_button_id=G4MSNR6JU3PB2" target="_blank"><img
                    class="Donacion" src="../img/donacion paypal.png" alt="Donacion" title="Donación" width="60px" /></a>
            <!-- Fin del boton de donación -->
            <br /><br />

            </div>
            <br>
        </main>
        <footer>
            <div class="container" style="background: #000000; color:#ffffff; border-radius: 50px;">
                <p>
                  <br>  <center><img src="../img/ubicacion.png" alt="ubicacion" width="20px"> - Colombia &ensp; <img
                            width="20px" src="../img/Descargas-Seguras.png" alt="logo">
                        - Desacargas Seguras <br><br>
                        <center>copyright: © Ilder Alberto Gutierrez Beleño</center>
                        **Toda donación que se realize esta destinada al pago de los servidores y mantenimiento de la
                        pagina, asi podemos asegurar que esta pagina
                        siga en funcionamiento.**</center><br>
                </p>
            </div>
        </footer>
    </div>
</body> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../Js/bootstrap.bundle.min.js"></script>

</html>