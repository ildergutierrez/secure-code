<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>secure code</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="icon" href="img/Descargas-Seguras.png" />
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
    <div class="container-fluid" style="padding: 0">
      <!-- MODAL -->
      <div class="modal" tabindex="-1" id="modal-iniciar-sesion">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background: #6309c3">
              <h5 class="modal-title" style="color: #ffffff">
                <center>
                  <img
                    src="img/icono.ico"
                    alt="Logo"
                    style="border-radius: 100%; width: 30%"
                  />
                  &ensp; Iniciar Sesión
                </center>
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body" style="background: #e0d4ed">
              <input
                type="text"
                class="form-control"
                id="recipient-name"
                placeholder="Usuario"
              /><br />
              <input
                type="password"
                class="form-control"
                id="recipient-name"
                placeholder="Contrsaeña"
              />
            </div>
            <div class="modal-footer" style="background: #e0d4ed">
              <button type="button" class="btn btn-primary">
                Iniciar sesión
              </button>
              <br />
              <center><a href=""> Olvide mi contraseña</a></center>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN -->

      <header>
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light"
          style="
            background: #e1e3f7;
            position: fixed;
            z-index: 100;
            width: 100%;
            padding: 0;
          "
        >
          <div class="container-fluid" style="background: #060f63">
            <a class="navbar-brand" href="index.php"
              ><img src="img/icono.ico" alt="Logo" width="70px"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a
                    style="color: #ffffff; font-size: 20px"
                    class="nav-link"
                    href="index.php"
                    >Inicio</a
                  >
                </li>
                <li class="nav-item dropdown">
                  <a
                    style="color: #ffffff; font-size: 20px"
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Codigos
                  </a>
                  <ul
                    style="color: #ffffff; font-size: 20px"
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdown"
                  >
                    <li>
                      <a class="dropdown-item" href="paginas/python.php"
                        >Python</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="paginas/Csharp.php">c#</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="paginas/Java.php">Java</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="paginas/glosario.php"
                        >Glosario</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a
                    style="color: #ffffff; font-size: 20px"
                    class="nav-link"
                    href="paginas/Nosotros.php"
                    >Nosotros</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    style="color: #ffffff; font-size: 20px"
                    class="nav-link"
                    href="paginas/contactos.php"
                    >Contactos</a
                  >
                </li>
              </ul>
              <form class="d-flex">
                <button
                  style="color: #ffffff; font-size: 20px"
                  class="btn btn-outline-info"
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#modal-iniciar-sesion"
                >
                  Iniciar sesión
                </button>
              </form>
            </div>
          </div>
        </nav>
      </header>
      <main>
        <!-- Donación -->
        <a
          href="https://www.paypal.com/donate/?hosted_button_id=G4MSNR6JU3PB2"
          target="_blank"
          ><img
            class="Donacion"
            src="img/donacion paypal.png"
            alt="Donacion"
            title="Donación"
            width="60px"
        /></a>
        <!-- Fin del boton de donación -->
        <br /><br />

        <!-- Inicio de Carrusel -->
        <div
          class="container-fluid"
          style="
            width: 80%;
            border-radius: 15px;
            box-shadow: 0 8px 32px 0 rgba(46, 46, 46, 0.66);
          "
        >
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="3"
                aria-label="Slide 4"
              ></button>
            </div>
            <div class="carousel-inner" style="border-radius: 15px">
              <div class="carousel-item active">
                <img src="img/3.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="img/1.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="img/2.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="img/4.png" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <!-- fin del carrusel -->
        <br />
        <div class="container">
          <div
            class="container"
            style="
              background: #e1f6f7;
              border-radius: 15px;
              padding: 35px;
              text-align: justify;
            "
          >
            <p style="padding: 20px">
              <strong>Descargas seguras</strong> es un lugar para los curisosos
              de la programación, donde podras encontrar diversos archivos
              con<strong> programas </strong>que son de utilidad y aprendizaje.
              Cada uno de los programas encontrados son
              <strong>desarrollados</strong> por estudiante o profecionales de
              en la materia, estos son proyectos o simplemente codigos para el
              facilitamiento de la adquisicion de los mismos. Tambien podra
              encontrar un
              <a class="" href="paginas/Glosario.html">glosario</a>
              de terminos o paginas donde podras reafirmar la información o
              adquisicion de la misma. <br /><br />
              Los lenguajes de programacion que podra encontrar en esta pagina
              actualmentes son: <a href="php/conexion_bd.php">Base</a>
            </p>
            <br /><br />
            <div class="row" style="background: #919797">
              <div class="col-2">
                <strong>
                  <center>Nombre</center>
                </strong>
              </div>
              <div class="col-4">
                <strong>
                  <center>Logo</center>
                </strong>
              </div>
              <div class="col-6">
                <strong>
                  <center>IDE</center>
                </strong>
              </div>
            </div>
            <!-- C# -->
            <div class="row" style="background: rgb(189, 165, 196)">
              <div
                class="col-2 d-flex align-items-center justify-content-center"
              >
                <center>
                  <h2>
                    <strong
                      ><a
                        href="paginas/Csharp.html"
                        style="text-decoration: none; color: #000000"
                        >C#</a
                      ></strong
                    >
                  </h2>
                </center>
              </div>
              <div
                class="col-4 d-flex align-items-center justify-content-center"
              >
                <center><img src="img/C.png" alt="C#" width="40%" /></center>
              </div>
              <div
                class="col-6 d-flex align-items-center justify-content-center"
              >
                <center>
                  <iframe
                    width="460"
                    height="315"
                    src="https://www.youtube.com/embed/8O7PopSscBE?si=WBcpqoN9r8F5y_Ap"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    style="border-radius: 20px; padding: 12px"
                  ></iframe>
                </center>
              </div>
            </div>
            <!-- Python -->
            <div class="row" style="background: rgb(153, 192, 236)">
              <div
                class="col-2 d-flex align-items-center justify-content-center"
              >
                <center>
                  <h2>
                    <strong
                      ><a
                        href="paginas/python.html"
                        style="text-decoration: none; color: #000000"
                        >Python</a
                      ></strong
                    >
                  </h2>
                </center>
              </div>
              <div
                class="col-4 d-flex align-items-center justify-content-center"
              >
                <center>
                  <img src="img/python--2.png" alt="Python" width="40%" />
                </center>
              </div>
              <div
                class="col-6 d-flex align-items-center justify-content-center"
              >
                <center>
                  <iframe
                    width="460"
                    height="315"
                    src="https://www.youtube.com/embed/IcFvElQNo4A?si=e011vnF0hJm0eCkU"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    style="border-radius: 20px; padding: 12px"
                  ></iframe>
                </center>
              </div>
            </div>
            <!-- Java -->
            <div class="row" style="background: rgb(240, 218, 146)">
              <div
                class="col-2 d-flex align-items-center justify-content-center"
              >
                <center>
                  <h2>
                    <strong
                      ><a
                        href="paginas/Java.html"
                        style="text-decoration: none; color: #000000"
                        >Javas</a
                      ></strong
                    >
                  </h2>
                </center>
              </div>
              <div
                class="col-4 d-flex align-items-center justify-content-center"
              >
                <center>
                  <img src="img/java-2.png" alt="Java" width="40%" />
                </center>
              </div>
              <div
                class="col-6 d-flex align-items-center justify-content-center"
              >
                <center>
                  <iframe
                    width="460"
                    height="315"
                    src="https://www.youtube.com/embed/47poaxfou94?si=Esmn16OyBDI9Jk5l"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    style="border-radius: 20px; padding: 12px"
                  ></iframe>
                </center>
              </div>
            </div>
            <br />

            <hr />
            <br />
            <p style="padding: 50px; font-size: 18px">
              Debes tener en cuenta que solo son guias para que usted como
              usuario se apoye y amplie su conocimiento o alimente su
              curiosidad.
              <br />
            </p>
            <hr />
          </div>
        </div>
        <br />
      </main>
      <footer>
        <div
          class="container"
          style="background: #000000; color: #ffffff; border-radius: 50px"
        >
          <p>
            <br />
            <center>
              <img src="img/ubicacion.png" alt="ubicacion" width="20px" /> -
              Colombia &ensp;
              <img width="20px" src="img/Descargas-Seguras.png" alt="logo" /> -
              Desacargas Seguras <br /><br />
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
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="Js/bootstrap.bundle.min.js"></script>
</html>
