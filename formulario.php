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

// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $content = $_POST['content'];

    // Manejo de la carga de la imagen
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $upload_dir = 'uploads/';
        $image_name = basename($_FILES['image']['name']);
        $target_file = $upload_dir . $image_name;

        // Mover la imagen cargada al directorio de destino
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // Insertar datos en la base de datos
            $sql = "INSERT INTO noticia_prueba (title, subtitle, content, image_path) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $title, $subtitle, $content, $target_file);

            if ($stmt->execute()) {
                echo "Registro insertado con éxito.";
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Hubo un error al cargar la imagen.";
        }
    } else {
        echo "No se cargó ninguna imagen.";
    }
}

$conn->close();
?>

<!-- Formulario para cargar datos -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Noticia</title>
</head>
<body>
    <form action="cargar_noticia.php" method="post" enctype="multipart/form-data">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required><br>
        <label for="subtitle">Subtítulo:</label>
        <input type="text" id="subtitle" name="subtitle" required><br>
        <label for="content">Contenido:</label>
        <textarea id="content" name="content" required></textarea><br>
        <label for="image">Imagen:</label>
        <input type="file" id="image" name="image" required><br>
        <button type="submit">Cargar Noticia</button>
    </form>
</body>
</html>
