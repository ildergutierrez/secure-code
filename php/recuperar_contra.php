<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '..\vendor\phpmailer\phpmailer\src\Exception.php';
require '..\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require '..\vendor\phpmailer\phpmailer\src\SMTP.php';

include('conexion_bd.php');

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $incrip = base64_encode($email);
    $consultae = "SELECT * FROM usuarios WHERE Correo='$email'";
    $Verificacion_email = mysqli_query($conexion, $consultae);
    if (mysqli_num_rows($Verificacion_email) > 0) {
        $mail = new PHPMailer();
        // Configuración del servidor SMTP (asegúrate de configurar esto adecuadamente para tu entorno)
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = 'b32ba521884b30';
        $phpmailer->Password = '438d448c90eb4b';
        $phpmailer->setFrom('restablecer@Descargasegura.com', 'Descargas Seguras');
        $phpmailer->addAddress($email);
        $phpmailer->Subject = 'Recuperar Contraseña';
        $phpmailer->Body = "Haz clic en el siguiente enlace para restablecer tu contraseña: http://localhost/Descargas_seguras/paginas/restablecer_password.php?correo=$incrip";
        if ($phpmailer->send()) {
            echo "<script>
            alert('Se ha enviado un correo electrónico con instrucciones para restablecer tu contraseña.');
            location.href ='../index.php';
            </script>";
            exit();
        } else {
            echo "<script>
            alert('Error al enviar el correo electrónico:  . $phpmailer->ErrorInfo');
            location.href ='../index.php';
            </script>";
            exit();
        }
    } else {
        // Si el correo no existe en la base de datos
        echo "<script>
        alert('El correo electrónico no está registrado.');
        location.href ='../index.php';
        </script>";
        exit();
    }
}
