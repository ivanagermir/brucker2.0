<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Contenido</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $dbname = "bd_de_prueba";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM noticia_prueba";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["subtitle"] . "</td>";
                echo "<td>" . $row["content"] . "</td>";
                echo "<td>" . $row["image"] . "</td>";
                echo "<td>";
                echo "<button onclick='editRow(" . $row["id"] . ")'>Editar</button>";
                echo "<button onclick='deleteRow(" . $row["id"] . ")'>Eliminar</button>";
                echo "</td>";
                echo "</tr>";
            }
        }

        $conn->close();
        ?>
    </tbody>
</table>

<script>
    function editRow(id) {
        // Lógica para editar el registro con el ID especificado
        // Por ejemplo, puedes redirigir a una página de edición con el ID como parámetro
        window.location.href = 'edit.php?id=' + id;
    }

    function deleteRow(id) {
        // Lógica para eliminar el registro con el ID especificado
        // Por ejemplo, puedes enviar una solicitud AJAX para eliminar el registro y luego actualizar la tabla
        // Aquí está la estructura básica de cómo podrías hacerlo
        fetch('delete.php?id=' + id, {
            method: 'DELETE'
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            console.log(data);
            // Actualizar la tabla después de eliminar el registro
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>

</body>
</html>
