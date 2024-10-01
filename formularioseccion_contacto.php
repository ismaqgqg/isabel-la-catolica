<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";  // Usuario por defecto en XAMPP
$password = "";  // Sin contraseña por defecto en XAMPP
$dbname = "inscripciones";  // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$curso = $_POST['curso'];
$turno = $_POST['turno'];
$horario = $_POST['horario'];

// Insertar datos en la base de datos
$sql = "INSERT INTO alumnos (nombre, edad, telefono, correo, direccion, curso, turno, horario)
VALUES ('$nombre', $edad, '$telefono', '$correo', '$direccion', '$curso', '$turno', '$horario')";

if ($conn->query($sql) === TRUE) {
    echo "Inscripción realizada con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
