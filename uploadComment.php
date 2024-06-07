<?php
// Conectar a la base de datos
$conn = new mysqli('localhost', 'root', '1234', 'bd_de_prueba');

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$name = $_POST['name'];
$comment = $_POST['comment'];

// Preparar la consulta SQL para insertar el comentario
$sql = "INSERT INTO comentarios (name, comment) VALUES ('$name', '$comment')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Comentario enviado correctamente";
} else {
    echo "Error al enviar el comentario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
