<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "bd_de_prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Carpeta para guardar las imágenes
$target_dir = "imagenes/";

// Recepción de datos
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];
$additional_content = $_POST['additional_content'];

// Validación básica de archivos
$allowed_file_types = array('image/jpeg', 'image/png', 'image/gif');

// Validación de imagen principal
$image_path = '';
if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $image_name = basename($_FILES['image']['name']);
    $image_path = $target_dir . $image_name;

    // Validar tipo de archivo
    $image_type = $_FILES['image']['type'];
    if (!in_array($image_type, $allowed_file_types)) {
        die("Error: Solo se permiten imágenes JPEG, PNG o GIF.");
    }

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
        die("Error al subir la imagen: " . $_FILES['image']['error']);
    }
} else {
    die("Error al subir la imagen: " . $_FILES['image']['error']);
}

// Validación de imagen adicional
$additional_image_path = '';
if ($_FILES['additional_image']['error'] === UPLOAD_ERR_OK) {
    $additional_image_name = basename($_FILES['additional_image']['name']);
    $additional_image_path = $target_dir . $additional_image_name;

    // Validar tipo de archivo
    $additional_image_type = $_FILES['additional_image']['type'];
    if (!in_array($additional_image_type, $allowed_file_types)) {
        die("Error: Solo se permiten imágenes JPEG, PNG o GIF.");
    }

    if (!move_uploaded_file($_FILES['additional_image']['tmp_name'], $additional_image_path)) {
        die("Error al subir la imagen adicional: " . $_FILES['additional_image']['error']);
    }
} else {
    die("Error al subir la imagen adicional: " . $_FILES['additional_image']['error']);
}

// Preparación de la consulta SQL
$sql = "INSERT INTO noticia_prueba (title, subtitle, content, imagen, additional_content, additional_image) VALUES (?, ?, ?, ?, ?, ?)";

// Preparar la declaración
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error al preparar la consulta: " . $conn->error);
}

// Vincular parámetros
if (!$stmt->bind_param("ssssss", $title, $subtitle, $content, $image_path, $additional_content, $additional_image_path)) {
    die("Error al vincular parámetros: " . $stmt->error);
}

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Noticia guardada correctamente";
} else {
    die("Error al guardar la noticia: " . $stmt->error);
}

$stmt->close();
$conn->close();
?>
