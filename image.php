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

// Obtener ID de la imagen
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT image, image_type FROM noticia_prueba WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($image, $imageType);
$stmt->fetch();
$stmt->close();
$conn->close();

if ($image) {
    header("Content-Type: " . $imageType);
    echo $image;
} else {
    http_response_code(404);
    echo "Imagen no encontrada.";
}
?>
