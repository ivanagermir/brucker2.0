<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
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
    <div class="text-center titulo-principal">
        <hr>
        <h1>CARGAR NOTICIA</h1>
        <hr>
    </div>

    <section class="container">
        <form id="dataForm" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Título:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtítulo</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido de la noticia</label>
                <textarea class="form-control" id="content" name="content" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Selecciona una imagen</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <div id="currentImageContainer1"></div>

            <div class="mb-3">
                <label for="additional_content" class="form-label">Párrafo adicional</label>
                <textarea class="form-control" id="additional_content" name="additional_content" required></textarea>
            </div>
            <div class="mb-3">
                <label for="additional_image" class="form-label">Selecciona otra imagen</label>
                <input type="file" class="form-control" id="additional_image" name="additional_image" accept="image/*" required>
            </div>
            <div id="currentImageContainer2"></div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </section>


    <section class="container table table-striped">
        <hr>
        <h2>Noticias Cargadas</h2>
        <table id="dataTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Subtítulo</th>
                    <th>Contenido</th>
                    <th>Imagen</th>
                    <th>Párrafo adicional</th>
                    <th>Imagen adicional</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Conexión a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "1234";
                $dbname = "bd_de_prueba";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Consultar datos
                $sql = "SELECT id, title, subtitle, content, imagen, additional_content, additional_image FROM noticia_prueba";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar datos en la tabla
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['subtitle'] . "</td>";
                        echo "<td>" . (strlen($row['content']) > 30 ? substr($row['content'], 0, 30) . "..." : $row['content']) . "</td>";
                        echo "<td><img src='" . $row['imagen'] . "' alt='' width='100'></td>";
                        echo "<td>" . (strlen($row['additional_content']) > 30 ? substr($row['additional_content'], 0, 30) . "..." : $row['additional_content']) . "</td>";
                        echo "<td><img src='" . $row['additional_image'] . "' alt='' width='100'></td>";
                        echo "<td><a href='edit.php?id=" . $row["id"] . "'>Editar</a></td>";
                        echo "<td><a href='delete.php?id=" . $row["id"] . "'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No hay datos disponibles</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

        <script>
            document.getElementById('image').addEventListener('change', function() {
                const file = this.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'Imagen';
                    img.width = 100;

                    const imageContainer = document.getElementById('currentImageContainer1');
                    if (imageContainer) {
                        imageContainer.innerHTML = '';
                        imageContainer.appendChild(img);
                    } else {
                        console.error('Element not found: currentImageContainer1');
                    }
                };

                reader.readAsDataURL(file);
            });

            document.getElementById('additional_image').addEventListener('change', function() {
                const file = this.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'Imagen';
                    img.width = 100;

                    const imageContainer = document.getElementById('currentImageContainer2');
                    if (imageContainer) {
                        imageContainer.innerHTML = '';
                        imageContainer.appendChild(img);
                    } else {
                        console.error('Element not found: currentImageContainer2');
                    }
                };

                reader.readAsDataURL(file);
            });
        </script>

    </section>

    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
