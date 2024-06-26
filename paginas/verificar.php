<?php
if (!isset($_GET['email'])) {
    header("Location: ../index.php");
    exit();
} else {
    $email =$_GET['email'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verificacion de Correo</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
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
</style>

<body>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="background: #fff; padding: 40px; border-radius: 15px;">
                <br><br>
                <div class="form-group">
                    <center> <label for="verificacion">
                            <h1> Verificación</h1>
                        </label></center>
                    <br><br><br>
                    <input type="hidden" value="<?php echo $email ?>" id="correo">
                    <input style="text-align: center; font-size: 40px; font-family: 'Times New Roman'; border: solid 1px #000000;" maxlength="6" oninput="verificar()" onkeypress="soloNumeros(event)" type="text" class="form-control" id="input-verificar" name="verificacion" placeholder="Codigo de verificacion" required>
                </div><br>
                <center> <button id="btn-verificar" onclick="enviar()" disabled class="btn btn-primary">Verificar</button></center>
                <br><br><br><br>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script>
        function enviar() {
            var correo = document.getElementById('correo').value;
            var verificacion = document.getElementById('input-verificar').value;
            location.href = `../php/validar_codigo.php?email=${correo}&verificacion=${verificacion}`;
        }

        function soloNumeros(event) {
            const charCode = event.which ? event.which : event.keyCode;
            if (charCode < 48 || charCode > 57) {
                event.preventDefault();
            }
        }

        function verificar() {
            var verificacion = document.getElementById('input-verificar').value;
            var btn = document.getElementById('btn-verificar');
            if (verificacion.length == 6) {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }
    </script>
</body>

</html>