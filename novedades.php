<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de Datos</h1>
    <div id="dataList">
        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "SELECT title, content FROM tu_tabla";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='dataItem'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["content"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No hay datos disponibles";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
