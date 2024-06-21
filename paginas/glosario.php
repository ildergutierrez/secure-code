<?php $cont = 0;
$valor = 0;
$usuario = "";
session_start();
if (isset($_SESSION['Email'])) {
    $usuario = $_SESSION['nombre'];
}
include("../php/conexion_bd.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glosario</title>
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
                    <form action="php/login.php" method="post">
                        <input type="hidden" value="../php/paginas/python.php" name="direccion">
                        <input type="hidden" value="../index.php" name="erro">
                        <div class="modal-body" style="background: #e0d4ed">
                            <div class="form-floating mb-3">
                                <input type="email" name="Email" class="form-control" id="floatingInput" placeholder="secure@example.com" required>
                                <label for="floatingInput">Correo</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" id="password" class="form-control" id="floatingInput" placeholder="secure@example.com" required>
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
                                    <a class="dropdown-item" href="Csharp.php">c#</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="Java.php">Java</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Glosario</a>
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
            mysqli_close($conexion);
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
        <div class="container-md" style="width: 75%; background: #fff;">
            
                <div class="container-md" style="padding: 30px; width: 80%;"> <br>
                    <center> <img src="../img/monitor-1307227_1920.jpg" alt="Glosario"  style="border-radius: 15px; width: 100%;"></center>
                </div>
                <div class="container" style="width: 80%;  border-radius: 15px; padding: 40px; ">
                  <strong>Algoritmo:</strong> Un conjunto de pasos definidos y
                    ordenados para realizar una tarea específica. <br /><br /><strong>API (Interfaz de Programación de
                        Aplicaciones):</strong>
                    Un conjunto de reglas y protocolos que permite que diferentes
                    aplicaciones se comuniquen entre sí. <br /><br /><strong>Backend:</strong>
                    La parte de un sistema de software que maneja la lógica y el
                    procesamiento de datos. <br /><br /><strong>Base de datos:</strong> Un
                    sistema para almacenar y organizar datos de manera estructurada.
                    <br /><br /><strong>Branch/Rama:</strong> Una copia paralela de un
                    repositorio que permite el desarrollo independiente de una función o
                    característica. <br /><br /><strong>Bucle for:</strong> Una estructura
                    de control que repite un bloque de código un número específico de
                    veces. <br /><br /><strong>Bucle while:</strong> Una estructura de
                    control que repite un bloque de código mientras se cumple una
                    condición especificada. <br /><br /><strong>Cadena/String:</strong>
                    Una secuencia de caracteres. <br /><br /><strong>Clase:</strong> Un
                    modelo para crear objetos que define atributos y métodos comunes a
                    todos los objetos de ese tipo. <br /><br /><strong>CMS (Sistema de Gestión de Contenidos):</strong>
                    Software que facilita la creación y administración de contenido web.
                    <br /><br /><strong>Commit:</strong> Un registro de cambios en un
                    repositorio de Git. <br /><br /><strong>Compilador:</strong> Un
                    programa que traduce código fuente de alto nivel a código máquina.
                    <br /><br /><strong>Condición/Declaración if:</strong> Una estructura
                    de control que ejecuta un bloque de código si se cumple una condición
                    especificada. <br /><br /><strong>Data Scientist (Científica de Datos):</strong>
                    Se enfoca en analizar grandes conjuntos de datos para obtener
                    información y conocimientos significativos que ayuden en la toma de
                    decisiones. <br /><br /><strong>Depuración/Debugging:</strong> El
                    proceso de identificar y corregir errores en un programa.
                    <br /><br /><strong>DOM (Modelo de Objeto del Documento):</strong> Una
                    representación en forma de árbol de la estructura de un documento HTML
                    que permite interactuar con los elementos de la página web.
                    <br /><br /><strong>Encapsulamiento:</strong> El ocultamiento de los
                    detalles de implementación de un objeto y la exposición solo de la
                    interfaz. <br /><br /><strong>Framework:</strong> Una estructura
                    conceptual y tecnológica sobre la cual puedes construir aplicaciones.
                    <br /><br /><strong>Frontend:</strong> La parte de un sistema de
                    software que interactúa con los usuarios y muestra la interfaz de
                    usuario. <br /><br /><strong>Full-stack Developer (Desarrolladora Full-stack):</strong>
                    Tiene habilidades tanto en el desarrollo de front-end como en el
                    desarrollo de back-end, lo que le permite trabajar en todas las capas
                    de una aplicación web. <br /><br /><strong>Función:</strong> Un bloque
                    de código que realiza una tarea específica y puede ser llamado desde
                    otras partes del programa. <br /><br /><strong>Game Developer (Desarrolladora de Juegos):</strong>
                    Se especializa en la creación de videojuegos, desde el diseño de la
                    jugabilidad hasta la implementación de la lógica del juego y los
                    gráficos. <br /><br /><strong>Git:</strong> Un sistema de control de
                    versiones distribuido ampliamente utilizado para el desarrollo de
                    software. <br /><br /><strong>Hash:</strong> Una función que convierte
                    una entrada de datos en una cadena de caracteres de longitud fija.
                    <br /><br /><strong>Herencia:</strong> Un mecanismo mediante el cual
                    una clase puede heredar atributos y métodos de otra clase.
                    <br /><br /><strong>HTTPS (Protocolo de Transferencia de Hipertexto Seguro):</strong>
                    Una versión segura del protocolo HTTP que utiliza cifrado SSL/TLS.
                    <br /><br /><strong>IDE (Entorno de Desarrollo Integrado):</strong> Un
                    conjunto de herramientas que facilitan la escritura, depuración y
                    ejecución de código. <br /><br /><strong>Interpretador:</strong> Un
                    programa que ejecuta instrucciones escritas en un lenguaje de
                    programación sin la necesidad de compilarlas primero.
                    <br /><br /><strong>JavaScript:</strong> Un lenguaje de programación
                    utilizado principalmente en el desarrollo web para agregar
                    interactividad y dinamismo a las páginas. <br /><br /><strong>jQuery:</strong>
                    Una biblioteca de JavaScript que simplifica la manipulación del DOM,
                    el manejo de eventos, las animaciones y las llamadas AJAX.
                    <br /><br /><strong>Lenguaje de programación:</strong> Un conjunto de
                    reglas y símbolos utilizados para escribir programas de computadora.
                    <br /><br /><strong>Librería:</strong> Un conjunto de funciones y
                    rutinas que pueden ser utilizadas por programas de computadora.
                    <br /><br /><strong>Método:</strong> Una función asociada a un objeto
                    que define su comportamiento. <br /><br /><strong>Middleware:</strong>
                    Software que actúa como intermediario entre diferentes aplicaciones o
                    sistemas. <br /><br /><strong>Mobile App Developer (Desarrolladora de Aplicaciones
                        Móviles):</strong>
                    Se enfoca en la creación de aplicaciones móviles para dispositivos
                    como teléfonos inteligentes y tabletas. <br /><br /><strong>NoSQL:</strong>
                    Un enfoque alternativo al almacenamiento y recuperación de datos que
                    no utiliza tablas relacionales. <br /><br /><strong>Objeto:</strong>
                    Una instancia de una clase que encapsula datos y comportamientos
                    relacionados. <br /><br /><strong>Parámetro/Argumento:</strong> Un
                    valor que se pasa a una función para su procesamiento.
                    <br /><br /><strong>Polimorfismo:</strong> La capacidad de objetos de
                    diferentes clases para ser tratados de manera uniforme.
                    <br /><br /><strong>Pila de llamadas/Call Stack:</strong> Una pila que
                    mantiene el registro de las llamadas a funciones en ejecución.
                    <br /><br /><strong>Pila/Stack:</strong> Una estructura de datos que
                    sigue el principio de LIFO (Last In, First Out) para el almacenamiento
                    de datos. <br /><br /><strong> Pseudocódigo: </strong> Es una forma de
                    escribir algoritmos utilizando un lenguaje informal que combina
                    elementos del lenguaje humano con convenciones de programación.
                    <br /><br /><strong>Pull Request/Solicitud de extracción:</strong> Una
                    solicitud para fusionar cambios de una rama a otra en un repositorio
                    de Git. <br /><br /><strong>Puntero:</strong> Una variable que
                    almacena la dirección de memoria de otra variable. <br /><br /><strong>QA Engineer (Ingeniera de
                        Aseguramiento de la Calidad):</strong>
                    Se encarga de probar y verificar la calidad de software para
                    garantizar que funcione correctamente antes de ser lanzados al mercado.
                    <br /><br /><strong>UI/UX Designer:</strong> Se especializa en diseñar la interfaz de usuario y la
                    experiencia del usuario para garantizar que los usuarios interactúen de manera efectiva y satisfactoria
                    con un producto o servicio digital.
                    <br /><br /><strong>Web Hosting:</strong> El servicio que permite a individuos y organizaciones publicar
                    un sitio web o una aplicación en Internet. <br><br>
                    <br>

                    <h2> <strong> <em> tipos comunes de programadores</em></strong></h2>
                    
                    <br /><br />
                    <strong>Backend Developer:</strong> Un programador que se especializa en el desarrollo de la parte del
                    servidor y la lógica de negocio de una aplicación web o móvil.

                    <br /><br />
                    <strong>Data Scientist:</strong> Un programador que se enfoca en analizar y extraer conocimiento
                    significativo de grandes conjuntos de datos.

                    <br /><br />
                    <strong>Frontend Developer:</strong> Un programador que se especializa en el desarrollo de la interfaz
                    de usuario y la experiencia del usuario en aplicaciones web o móviles.

                    <br /><br />
                    <strong>Full-stack Developer:</strong> Un programador que tiene habilidades tanto en el desarrollo del
                    lado del cliente (frontend) como del servidor (backend) y puede trabajar en todos los aspectos de una
                    aplicación.

                    <br /><br />
                    <strong>Game Developer:</strong> Un programador que se enfoca en el desarrollo de videojuegos, desde la
                    programación del motor del juego hasta la implementación de la lógica del juego y la optimización del
                    rendimiento.<br /><br />
                    <strong>Mobile Developer:</strong> Un programador que se especializa en el desarrollo de aplicaciones
                    móviles para plataformas como iOS y Android.
                    <br /><br /><strong>Software Engineer:</strong> Un profesional que diseña, desarrolla y mantiene
                    software de manera
                    sistemática y eficiente, centrándose en la calidad, la escalabilidad y el rendimiento del software.
                    <br /><br /><strong>Web Developer:</strong> Un programador que se enfoca en el desarrollo de sitios web
                    y
                    aplicaciones web utilizando tecnologías como HTML, CSS y JavaScript.
                    <br><br><br>
                </div>
                </dxiv>
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
<script src="../Control/password.js"></script>

</html>