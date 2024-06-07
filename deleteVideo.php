<?php
// Verificar si se recibió un ID de video válido
if(isset($_GET['id'])){
    // Obtener el ID del video a eliminar
    $video_id = $_GET['id'];

    // Conectar a la base de datos
    $conn = new mysqli('localhost', 'root', '1234', 'bd_de_prueba');

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consultar la base de datos para obtener el nombre del archivo de video
    $query = "SELECT video FROM videos WHERE idvideos = $video_id";
    $result = $conn->query($query);

    // Verificar si se encontró el video en la base de datos
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $video_name = $row['video'];

        // Eliminar el registro de video de la base de datos
        $delete_query = "DELETE FROM videos WHERE idvideos = $video_id";
        if ($conn->query($delete_query) === TRUE) {
            // Eliminar el archivo de video del servidor
            unlink("videos/" . $video_name);
            echo "El video se eliminó correctamente.";
        } else {
            echo "Error al eliminar el video de la base de datos: " . $conn->error;
        }
    } else {
        echo "No se encontró ningún video con el ID proporcionado.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    echo "ID de video no proporcionado.";
}
?>
