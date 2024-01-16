<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        height: 100vh; /* Esto asegura que el body ocupe toda la altura de la ventana */
        width: 100%;
    }

    #imagenCompleta {
        height: 100%;
        width: 100%;
        object-fit: cover;
        position: absolute;
        left: 0;
        top: 0;

    }
</style>

<?php

session_start();

if (isset($_SESSION['miVariable'])) {
    include 'index4.html';
    ob_flush();
    flush();
} else {
    echo "Variable no encontrada.";
    ob_flush();
    flush();
}
if (isset($_POST['form_token'], $_SESSION['form_token']) && $_POST['form_token'] === $_SESSION['form_token']) {
    // Procesa el formulario

    // Una vez procesado, invalida el token
    unset($_SESSION['form_token']);
} else {
    // Manejo de error: posible envío duplicado o solicitud no válida
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$email = $_SESSION['miVariable'];
//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = '*******';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '*******';                     //SMTP username
    $mail->Password   = '******';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // Set Charset
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('********', 'Ya estas inscrito');
    $mail->addAddress($email, $nombre);     //Add a recipient

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirmacion de Registro Talento Tech';
    $mail->AddEmbeddedImage('Asset/Image/confirmar.png', 'logoimg', 'logo.jpg'); // attach file logo.jpg, and later link to it using identfier logoimg
    $mail->Body = "
    <img src=\"cid:logoimg\" /></p>";

    $mail->send();
    //echo 'Correo de confirmación enviado';
} catch (Exception $e) {
    echo "Error al enviar el correo de confirmación: {$mail->ErrorInfo}";
}
?>