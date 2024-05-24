<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Noticias</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

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

$sql = "SELECT title, subtitle, content, image FROM noticia_prueba";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Guardar datos en un array
    $noticias = [];
    while($row = $result->fetch_assoc()) {
        $noticias[] = $row;
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>

<div class="noticias-container">
    <?php if (!empty($noticias)): ?>
        <?php foreach ($noticias as $noticia): ?>
            <div class="card">
                <?php
                $imgPath = "uploads/" . $noticia['image'];
                echo '<p>Ruta de la imagen: ' . $imgPath . '</p>'; // Línea de depuración
                ?>
                <img src="<?php echo $imgPath; ?>" alt="<?php echo $noticia['title']; ?>">
                <h2><?php echo $noticia['title']; ?></h2>
                <h3><?php echo $noticia['subtitle']; ?></h3>
                <p><?php echo $noticia['content']; ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay noticias disponibles.</p>
    <?php endif; ?>
</div>
</body>
</html>

