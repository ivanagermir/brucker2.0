<?php

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

// Obtener datos del formulario
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];
$additional_content = $_POST['additional_content'];

// Validación básica de archivos
$allowed_file_types = array('image/jpeg', 'image/png', 'image/gif');

// Validación de imagen principal
if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $image_name = basename($_FILES['image']['name']);
    $image_path = $target_dir . $image_name;

    // Validar tipo de archivo
    $image_type = $_FILES['image']['type'];
    if (!in_array($image_type, $allowed_file_types)) {
        die("Error: Solo se permiten imágenes JPEG, PNG o GIF.");
    }

    // Validar tamaño de archivo (opcional)
    // $max_file_size = 2097152; // 2 MB
    // if ($_FILES['image']['size'] > $max_file_size) {
    //     die("Error: El tamaño máximo del archivo es de 2 MB.");
    // }

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
        die("Error al subir la imagen: " . $_FILES['image']['error']);
    }
} else {
    die("Error al subir la imagen: " . $_FILES['image']['error']);
}

// Validación de imagen adicional
if ($_FILES['additional_image']['error'] === UPLOAD_ERR_OK) {
    $additional_image_name = basename($_FILES['additional_image']['name']);
    $additional_image_path = $target_dir . $additional_image_name;

    // Validar tipo de archivo
    $additional_image_type = $_FILES['additional_image']['type'];
    if (!in_array($additional_image_type, $allowed_file_types)) {
        die("Error: Solo se permiten imágenes JPEG, PNG o GIF.");
    }

    // Validar tamaño de archivo (opcional)
    // $max_file_size = 2097152; // 2 MB
    // if ($_FILES['additional_image']['size'] > $max_file_size) {
    //     die("Error: El tamaño máximo del archivo es de 2 MB.");
    // }

    if (!move_uploaded_file($_FILES['additional_image']['tmp_name'], $additional_image_path)) {
        die("Error al subir la imagen adicional: " . $_FILES['additional_image']['error']);
    }
} else {
    die("Error al subir la imagen adicional: " . $_FILES['additional_image']['error']);
}

// Prepare the SQL statement
$sql = "INSERT INTO noticia_prueba (title, subtitle, content, image, additional_content, additional_image) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters to prevent SQL injection
$stmt->bind_param("sssssss", $title, $subtitle, $content, $image_path, $additional_content, $additional_image_path);

// Execute the statement
if ($stmt->execute()) {
    echo "Noticia guardada correctamente";
} else {
    echo "Error al guardar la noticia: " . $conn->error;
}

$stmt->close();
$conn->close();

?>
