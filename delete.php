<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "bd_de_prueba";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID de la noticia a eliminar
$id = $_GET['id'];

// Consulta SQL para eliminar la noticia
$sql = "DELETE FROM noticia_prueba WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Noticia eliminada correctamente";
    // Redireccionar a la página anterior después de 2 segundos
    header("refresh:2;url=javascript://history.go(-1)");
} else {
    echo "Error al eliminar la noticia: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
