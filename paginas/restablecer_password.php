<?php
if (!isset($_GET['correo'])) {
    header("Location: ../index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Contraseña</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- <link rel="" href=""/> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
    <link rel="icon" href="../img/Descargas-Seguras.png" />
</head>

<body>
    <div class="container-mt-5">
        <br><br><br><br>
        <center>
            <div class="container-md" style="width: 70%;">
                <form action="../php/nueva_contra.php" style=" padding: 15px;border: solid 2px #000;" method="post">
                    <div class="container-md" style="background: #6309c3;">
                        <div class="row" style="border: solid 1px #000;">
                            <div class="col-4 d-flex align-items-center justify-content-center"> <img src="../img/Descargas-Seguras.png" alt="Descargas Seguras" width="70%" /></div>
                            <div class="col-8 d-flex align-items-center justify-content-center">
                                <h3 style="color: #ffffff;"><b>Recuperar Contraseña</b> </h3>
                            </div>
                        </div>

                    </div>
                    <div class="container mt-5">
                        <div class="row align-items-center">
                            <div class="col-auto align-items-center" style="background: #C095F3; border-radius: 5px;">
                                <label for="emailInput" class="form-label">Nueva Contraseña</label>
                            </div>
                            <div class="col">
                                <input type="hidden" name="correo" value="<?php echo $_GET['correo']; ?>">
                                <input type="password" name="contra" class="form-control" id="password-nc" placeholder="*************" required>
                            </div>
                            <div class="col">
                                <label id="vp" class="btn btn-info" onclick="nc()">ver contraseña</label>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-info">Guardar Contraseña</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </center>
    </div>
    <script src="../Control/password.js"></script>
</body>

</html>