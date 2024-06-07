<?php
// Verificar si se recibió un archivo de video
if(isset($_FILES['video'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $video_name = $_FILES['video']['name'];
    $video_tmp_name = $_FILES['video']['tmp_name'];
    
    // Mover el archivo de video a una carpeta de destino
    move_uploaded_file($video_tmp_name, 'videos_save/' . $video_name);
    
    // Conectar a la base de datos
    $conn = new mysqli('localhost', 'root', '1234', 'bd_de_prueba');
    
    // Insertar la información en la base de datos
    $query = "INSERT INTO videos (title, description, video) VALUES ('$title', '$description', '$video_name')";
    $result = $conn->query($query);
    
    // Cerrar la conexión
    $conn->close();
    
    // Redireccionar a la página de la galería de videos
    header('Location: cargarVideos.php');
    exit();
}
?>
