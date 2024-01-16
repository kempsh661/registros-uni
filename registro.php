<?php

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
$nombre = $_POST['nombre'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellido'];
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
$parrafo = $_POST['parrafo'];
$segundo_nombre = $_POST['segundo_nombre'];
$segundo_apellido = $_POST['segundo_apellido'];
$otra_discapa = $_POST['otra_discapa'];




// Para un texto más largo

// Preparar la sentencia SQL
$stmt = $conn->prepare("INSERT INTO formulario_registro (tipo_documento, numero_documento, nombre, segundo_nombre, apellidos, segundo_apellido, fecha_nacimiento, fecha_expedicion, genero, orientacion, telefono, correo, nacionalidad, departamento, ciudad, zona, campesino, estrato, etnia, conflicto, nivel_educativo, discapacidad, tipos_discapacidad, compromiso, eje_tematico, tipo_formacion, requisitos, autoriza, certificada, parrafo,otra_discapa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Asumiendo que todos los campos son cadenas de texto, se usa 's' para cada uno.
$types = 'sssssssssssssssssssssssssssssss';
$stmt->bind_param($types, $tipo_documento, $numero_documento, $nombre, $segundo_nombre, $apellidos, $segundo_apellido, $fecha_nacimiento, $fecha_expedicion, $genero, $orientacion, $telefono, $correo, $nacionalidad, $departamento, $ciudad, $zona, $campesino, $estrato, $etnia, $conflicto, $nivel_educativo, $discapacidad, $tipos_discapacidad, $compromiso, $eje_tematico, $tipo_formacion, $requisitos, $autoriza, $certificada, $parrafo, $otra_discapa);
session_start();
$_SESSION['miVariable'] = $_POST['email'];
// Redirige a la segunda página

// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Registro exitoso.";
    $nombre = $_POST['nombres'];
    $email = $_POST['email'];

} else {
    echo "Error: " . $stmt->error;
}

// Cerrar sentencia y conexión
$stmt->close();
$conn->close();
header('Location: confirmacion.php');
?>