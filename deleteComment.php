<?php
// Verificar si se recibió un ID de comentario válido
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $comment_id = $_GET['id'];
    
    // Conectar a la base de datos
    $conn = new mysqli('localhost', 'root', '1234', 'bd_de_prueba');

    // Eliminar el comentario correspondiente al ID recibido
    $query = "DELETE FROM comentarios WHERE id = $comment_id";
    if ($conn->query($query) === TRUE) {
        echo "Comentario eliminado correctamente";
    } else {
        echo "Error al eliminar el comentario: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "ID de comentario no válido";
}
?>
