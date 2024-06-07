<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Carga de Videos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../videos/style.css">
</head>

<style>
  body{
    background-color: rgb(211, 206, 206);
}
.titulo-principal {
    color: aliceblue;
    background-color: #002244;
    padding: 30px;
}

form {
    padding: 30px;
}
</style>
<body>
    <main>
      <div class="text-center titulo-principal">
        <hr><h1>CARGAR VIDEOS</h1> <hr>
      </div> 

      <form action="uploadVideo.php" method="post" enctype="multipart/form-data">
        <label for="title">Título:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Descripción:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="video">Video:</label><br>
        <input type="file" id="video" name="video" accept="video/*" required><br><br>
      </form>
  
    </main>
    <?php
// Conectar a la base de datos
$conn = new mysqli('localhost', 'root', '1234', 'bd_de_prueba');

// Obtener la lista de videos de la base de datos
$query = "SELECT * FROM videos";
$result = $conn->query($query);

// Mostrar la galería de videos en tarjetas
if ($result->num_rows > 0) {
    echo "<div class='row'>";
    $count = 0; // Contador para controlar las tarjetas por fila
    while($row = $result->fetch_assoc()) {
        if ($count % 3 == 0) {
            // Si el contador es divisible por 3, comienza una nueva fila
            echo "</div><div class='row'>";
        }
        echo "<div class='col-md-4'>";
        echo "<div class='card'>";
        echo "<video class='w-100' controls><source src='videos_save/".$row['video']."' type='video/mp4'></video>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>".$row['title']."</h5>";
        echo "<p class='card-text'>".$row['description']."</p>";
        echo "<a href='deleteVideo.php?id=".$row['idvideos']."' class='btn btn-primary'>Eliminar</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        $count++;
    }
    echo "</div>"; // Cerrar la última fila
} else {
    echo "No hay videos disponibles";
}

// Cerrar la conexión
$conn->close();
?>

   
      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
