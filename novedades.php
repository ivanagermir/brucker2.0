<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brücker</title>
    <link rel="icon" href="/img/logo/PNG/fondoDorado.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/logo/PNG/fondoDorado.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/novedades.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <nav class=" navbar navbar-expand-lg">
      <div class="col-lg-10 container-fluid">
        <!-- Logo aqui POSICIONADO A LA IZQUIERDA-->
        <a class="navbar-brand" href="../brucker2.0/home.php">
          <img src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo Brücker" height="70">
        </a>
        <!-- Botón de colapsar para pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menú POSICIONADO A LA DERECHA-->
        <div class="collapse navbar-collapse navbar-style" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto justify-content-end">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../brucker2.0/home.php"><b>Home</b></a>
            </li>
            <!-- desplegable nosotros -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <b>Nosotros</b>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../brucker2.0/quienesSomos.php">Quiénes somos</a></li>
                <li><a class="dropdown-item" href="../brucker2.0/exclusividad.php">La exclusividad</a></li>
              </ul>
            </li>
            <!-- desplegable servicios -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <b>Servicios</b>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../brucker2.0/comprar.php">Comprar</a></li>
                <li><a class="dropdown-item" href="../brucker2.0/vender.php">Vender</a></li>
                <li><a class="dropdown-item" href="../brucker2.0/tasar.php">Tasar</a></li>
                <li><a class="dropdown-item" href="../brucker2.0/invertir.php">Invertir</a></li>
              </ul>
            </li>
            <!-- nav propiedades-novedades-contacto -->
            <li class="nav-item">
              <a class="nav-link" href="../brucker2.0/propiedades.php"><b>Propiedades</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../brucker2.0/novedades.php"><b>Novedades</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../brucker2.0/contacto.php"><b>Contacto</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>

<main>
    <!--Portada-->
    <div class="img-fluid portada-novedades">
        <div class="container cover-text">
        <h1 class="display-4">NOVEDADES</h1>
        <hr style="border-top: 5px solid #002244; width: 10%; margin: 1rem 0;">
        </div>
    </div>

    <!-- ICONO DE WHATSAPP -->
    <aside class="container">
        <div class="whatsapp-container">
            <a href="https://wa.me/543512010010" class="whatsapp-logo" target="_blank">
                <div class="tooltip">¿Necesitás asesoramiento?</div>
                <img src="../brucker2.0/img/logo/whatsapp-icon-green.png" alt="WhatsApp Logo">
            </a>
        </div>
    </aside>
</main>

<div class="container mt-5">
    <div class="row">
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
            // Contador para controlar el número de tarjetas por fila
            $counter = 0;

            while ($row = $result->fetch_assoc()) {
                // Si es la primera tarjeta de la fila, abrir un nuevo row
                if ($counter % 3 == 0) {
                    echo '<div class="row">';
                }

                echo "<div class='col-md-4'>";
                echo "<div class='card mb-4'>";
                echo "<img src='" . $row['imagen'] . "' class='card-img-top' alt='Imagen'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
                ?>
                <a class="btn btn-primary blue-button" href="../brucker2.0/ver_noticia.php?id=<?php echo $row['id']; ?>" role="button">Leer más...</a>
                <?php
                echo "</div>";
                echo "</div>";
                echo "</div>";

                // Si es la última tarjeta de la fila, cerrar el row
                if ($counter % 3 == 2 || $counter == $result->num_rows - 1) {
                    echo '</div>';
                }

                $counter++;
            }
        } else {
            echo "<p>No hay noticias disponibles</p>";
        }

        $conn->close();
        ?>
    </div>
</div>

<!--Footer-->
<footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center mb-3 mb-md-0">
          <img src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo de la empresa" class="img-fluid" style="max-height: 70px;">
          <p class="mt-3">© 2024 Brücker. Todos los derechos reservados.</p>
        </div>
        <div class="col-md-4 text-center mb-3 mb-md-0">
        </div>
        <div class="col-md-4 text-center">
          <ul class="list-inline social-icons mt-3">
            <li class="list-inline-item"><a href="https://wa.me/543512010010"><i class="bi bi-whatsapp"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/brucker.ok?igsh=MWI0Z2U3OHpoajBjeQ=="><i class="bi bi-instagram"></i></a></li>
          </ul>
          <h5>Síguenos</h5>
        </div>
      </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tu código aquí
     // JavaScript para mostrar y ocultar el detalle de las noticias al hacer clic
     const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('click', () => {
              
            });
        });
});
</script>

</body>
</html>
