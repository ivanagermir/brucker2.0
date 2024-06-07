<?php
// Verificar si se recibió un ID de comentario válido y es un número entero
if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
    $comment_id = $_GET['id'];
    
    // Conectar a la base de datos
    $conn = new mysqli('localhost', 'root', '1234', 'bd_de_prueba');

    // Obtener el comentario correspondiente al ID recibido
    $query = "SELECT * FROM comentarios WHERE id = $comment_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $comment = $result->fetch_assoc();
    } else {
        echo "No se encontró el comentario";
        exit; // Terminar la ejecución del script
    }
    // Verificar si se recibió un ID de comentario válido y es un número entero
if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
    $comment_id = $_GET['id'];
    // Resto del código...
} else {
    echo "ID de comentario no válido";
    exit; // Terminar la ejecución del script
}
}




// Verificar si se envió el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nuevo contenido del comentario
    $new_comment = $_POST['new_comment'];

    // Actualizar el comentario en la base de datos
    $query = "UPDATE comentarios SET comment = '$new_comment' WHERE id = $comment_id";
    if ($conn->query($query) === TRUE) {
        echo "Comentario actualizado correctamente";
        // Actualizar el comentario en la variable $comment para mostrar el nuevo comentario en el formulario
        $comment['comment'] = $new_comment;
    } else {
        echo "Error al actualizar el comentario: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comentario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Comentario</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $comment_id; ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $comment['name']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="current_comment" class="form-label">Comentario Actual:</label>
                <textarea class="form-control" id="current_comment" name="current_comment" rows="3" disabled><?php echo $comment['comment']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="new_comment" class="form-label">Nuevo Comentario:</label>
                <textarea class="form-control" id="new_comment" name="new_comment" rows="3" maxlength="260" required><?php echo $comment['comment']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
