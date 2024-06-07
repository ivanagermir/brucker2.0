<?php
// Verificar si se recibió un ID de comentario válido
if(isset($_GET['id']) && !empty($_GET['id'])) {
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
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && !empty($_POST['id'])) {
    // Si no se proporcionó un ID en la URL pero se envió un formulario POST con un ID válido
    $comment_id = $_POST['id'];
} else {
    echo "ID de comentario no válido";
    exit; // Terminar la ejecución del script
}



$conn->close();


?>
    <!-- Mostrar formulario prellenado-->
   
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Editar Noticia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Editar Noticia</h1>

            <form action="update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="mb-3">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtítulo</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" value="<?php echo $row['subtitle']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenido de la noticia</label>
                    <textarea class="form-control" id="content" name="content" required><?php echo $row['content']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagen actual</label>
                    <img src="<?php echo $row['image']; ?>" alt="" width="100">
                </div>

                <div class="mb-3">
                    <label for="new_image" class="form-label">Seleccionar nueva imagen (opcional)</label>
                    <input type="file" class="form-control" id="new_image" name="new_image" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="additional_content" class="form-label">Párrafo adicional</label>
                    <textarea class="form-control" id="additional_content" name="additional_content" required><?php echo $row['additional_content']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="additional_image" class="form-label">Imagen adicional actual</label>
                    <img src="<?php echo $row['additional_image']; ?>" alt="" width="100">
                </div>

                <div class="mb-3">
                    <label for="new_additional_image" class="form-label">Seleccionar nueva imagen adicional (opcional)</label>
                    <input type="file" class="form-control" id="new_additional_image" name="new_additional_image" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Guardar cambios</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>


