<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Carga de Comentarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../comentarios/style.css">
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
            <hr><h1>CARGAR COMENTARIOS</h1> <hr>
        </div> 

        <form action="uploadComment.php" method="post">
            
            <div class="mb-3">
                <label for="comment" class="form-label">Comentario:</label>
                <textarea class="form-control" id="comment" name="comment" rows="3" maxlength="260" required></textarea>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
               
            
          
            <button type="submit" class="btn btn-primary">Enviar Comentario</button>
        </form>
    </main>

    <?php
// Conectar a la base de datos
$conn = new mysqli('localhost', 'root', '1234', 'bd_de_prueba');

// Obtener la lista de comentarios de la base de datos
$query = "SELECT * FROM comentarios";
$result = $conn->query($query);

echo "<div class='container mt-5'>";
echo "<h2>Comentarios Cargados</h2>";
echo "<table class='table table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nombre</th>";
echo "<th>Comentario</th>";
echo "<th>Acciones</th>"; // Nueva columna para los botones de editar y eliminar
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Mostrar los comentarios en la tabla
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['comment']."</td>";
        echo "<td>";
        echo "<a href='editComment.php?id=".$row['id']."' class='btn btn-primary btn-sm'>Editar</a>"; // Botón de editar
        echo "<a href='deleteComment.php?id=".$row['id']."' class='btn btn-danger btn-sm ms-1'>Eliminar</a>"; // Botón de eliminar
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay comentarios cargados</td></tr>";
}

echo "</tbody>";
echo "</table>";
echo "</div>";

// Cerrar la conexión
$conn->close();
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
