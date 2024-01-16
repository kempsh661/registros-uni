<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
// Configuración de la conexión a la base de datos
$host = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recoger los datos del formulario
$tipo_documento = $_POST['tipo_documento'];
$numero_documento = $_POST['numero_doc'];
$nombre = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nac'];
$fecha_expedicion = $_POST['fecha_exp'];
$genero = $_POST['genero'];
$orientacion = $_POST['orientacion'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$nacionalidad = $_POST['nacionalidad'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];
$zona = $_POST['zona'];
$campesino = $_POST['campesino'];
$estrato = $_POST['estrato'];
$etnia = $_POST['etnia'];
$conflicto = $_POST['conflicto'];
$nivel_educativo = $_POST['nivel_edu'];
$discapacidad = $_POST['discapacidad'];
$tipos_discapacidad = $_POST['tipos_discapacidad'];
$compromiso = $_POST['compromiso'];
$eje_tematico = $_POST['eje_tematico'];
$tipo_formacion = $_POST['tipo_forma'];
$requisitos = $_POST['requisitos'];
$autoriza = $_POST['autoriza'];
$certificada = $_POST['certificada'];
$parrafo = $_POST['parrafo']; // Para un texto más largo
header('Location: confirmacion.html');
// Preparar la sentencia SQL
$stmt = $conn->prepare("INSERT INTO formulario_registro (tipo_documento, numero_documento, nombre, apellidos, fecha_nacimiento, fecha_expedicion, genero, orientacion, telefono, correo, nacionalidad, departamento, ciudad, zona, campesino, estrato, etnia, conflicto, nivel_educativo, discapacidad, tipos_discapacidad, compromiso, eje_tematico, tipo_formacion, requisitos, autoriza, certificada, parrafo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Asumiendo que todos los campos son cadenas de texto, se usa 's' para cada uno.
$types = 'ssssssssssssssssssssssssssss';
$stmt->bind_param($types, $tipo_documento, $numero_documento, $nombre, $apellidos, $fecha_nacimiento, $fecha_expedicion, $genero, $orientacion, $telefono, $correo, $nacionalidad, $departamento, $ciudad, $zona, $campesino, $estrato, $etnia, $conflicto, $nivel_educativo, $discapacidad, $tipos_discapacidad, $compromiso, $eje_tematico, $tipo_formacion, $requisitos, $autoriza, $certificada, $parrafo);

// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Registro exitoso.";
    $nombre = $_POST['nombres'];
    $email = $_POST['email'];

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'kem@kemcode.tech';                     //SMTP username
        $mail->Password   = 'Prueba66$';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('kem@kemcode.tech', 'Master Kem');
        $mail->addAddress($email, $nombre);     //Add a recipient
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Confirmación de Registro';
        $mail->AddEmbeddedImage('fondoy.jpeg', 'confirmacion', 'fondoy.jpeg');
        $mail->Body    = "Hola " . $nombre . ",<br><br>Gracias por registrarte.<br><br><img src='cid:confirmacion'>";

    
        $mail->send();
        //echo 'Correo de confirmación enviado';
    } catch (Exception $e) {
        echo "Error al enviar el correo de confirmación: {$mail->ErrorInfo}";
    }
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar sentencia y conexión
$stmt->close();
$conn->close();
?>
