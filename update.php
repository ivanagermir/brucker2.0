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

// Obtener datos del formulario
$id = $_POST['id'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];

// Verificar si se subió una nueva imagen
if ($_FILES['image']['size'] > 0) {
    $imageName = $_FILES['image']['name'];
    $imageTempName = $_FILES['image']['tmp_name'];
    $imageFolder = "uploads/" . basename($imageName);

    // Mover la imagen a la carpeta de destino
    if (!move_uploaded_file($imageTempName, $imageFolder)) {
        echo "Error al cargar la imagen.";
        exit;
    }

    // Actualizar la imagen en la base de datos solo si se subió una nueva
    $sql = "UPDATE noticia_prueba SET title='$title', subtitle='$subtitle', content='$content', image='$imageFolder' WHERE id=$id";
} else {
    // Si no se subió una nueva imagen, actualizar solo los otros campos
    $sql = "UPDATE noticia_prueba SET title='$title', subtitle='$subtitle', content='$content' WHERE id=$id";
}

// Ejecutar la consulta de actualización
if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado con éxito";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
