<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Imagen</title>
</head>
<body>
    <h2>Subir Imagen</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <label for="subtitle">SubTítulo:</label>
        <input type="text" name="subtitle" id="subtitle" required>
        <br>
        <label for="content">Contenido:</label>
        <textarea name="content" id="content" required></textarea>
        <br>
        <label for="image">Seleccionar imagen:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <input type="submit" value="Subir Imagen">
    </form>


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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $subtitle = $_POST['$subtitle'];
    $content = $_POST['content'];
    $image = $_FILES['image'];

    // Directorio donde se guardarán las imágenes
    $target_dir = "uploads/";
    // Ruta completa del archivo
    $target_file = $target_dir . basename($image["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Comprobar si el archivo es una imagen real o una imagen falsa
    $check = getimagesize($image["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    // Comprobar si el archivo ya existe
    if (file_exists($target_file)) {
        echo "Lo siento, el archivo ya existe.";
        $uploadOk = 0;
    }

    // Comprobar el tamaño del archivo
    if ($image["size"] > 500000) {
        echo "Lo siento, el archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permitir ciertos formatos de archivo
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    // Comprobar si $uploadOk está establecido en 0 por algún error
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
    // Si todo está bien, intenta subir el archivo
    } else {
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            echo "El archivo ". htmlspecialchars( basename( $image["name"])). " ha sido subido.";
            // Guardar la información en la base de datos
            $sql = "INSERT INTO noticia_prueba (title, subtitle, content, image_path) VALUES ('$title', '$subtitle', '$content', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "Nueva noticia creada con éxito.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }
}

$conn->close();
?>

</body>
</html>
