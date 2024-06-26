<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

if (isset($_GET['email'])) {
    $e_code = $_GET['email'];
    $email = base64_decode($_GET['email']); // Decodificar la dirección de correo electrónico
    $ver =  base64_decode($_GET['verificacion']);
    $nombre = base64_decode($_GET['nombre']);
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'b32ba521884b30';
    $phpmailer->Password = '438d448c90eb4b';
    $phpmailer->setFrom('verificar@Descargasegura.com', 'Descargas Seguras');
    $phpmailer->addAddress($email);
    $phpmailer->Subject = 'Verificación de cuenta, Descargas Seguras';
    $phpmailer->Body = "$nombre, Bienvenido a Descargas Seguras, un lugar donde encontraras codigos en lenguajes populares como C#, Java y Python,  Tú código de verificación es $ver o usa el link para verificar tu cuenta http://localhost/Descargas_seguras/php/validar_codigo.php?email=$e_code&verificacion=$ver";
    if ($phpmailer->send()) {
        echo "<script>
            alert(' Se ha enviado un correo electrónico con el número de verificación.');
            location.href ='../paginas/verificar.php?email=$e_code';
            </script>";
        exit();
    } else {
        echo "<script>
            alert('Error al enviar el correo electrónico: " . $phpmailer->ErrorInfo . "');
            location.href ='../paginas/verificar.php';
            </script>";
        exit();
    }
} else {
    // Si el correo no existe en la base de datos
    echo "<script>
        alert('Ups, ocurrió un error, intenta de nuevo.');
        location.href ='../index.php';
        </script>";
    exit();
}
