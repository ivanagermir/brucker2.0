<?php
include 'config.php';

$sql = "SELECT id, title, subtitle, content, image_path FROM noticias";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<div class='noticia'>";
        echo "<h2>" . $row["title"]. "</h2>";
        echo "<h4>" . $row["subtitle"]. "</h4>";
        echo "<p>" . $row["content"]. "</p>";
        if ($row["image_path"]) {
            echo "<img src='" . $row["image_path"] . "' alt='Imagen de noticia'>";
        }
        echo "</div>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
