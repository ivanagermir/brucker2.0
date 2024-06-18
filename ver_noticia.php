<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Somos el PUENTE que conecta a las personas con sus sueños inmobiliarios, ofreciendo un servicio profesional y comprometido. Descubre una nueva forma de vivir la experiencia inmobiliaria.">
  <title>BRÜCKER</title>
  <link rel="icon" href="./img/logo/PNG/logo-redondo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../brucker2.0/css/ver_noticia.css">
  <link rel="stylesheet" href="../brucker2.0/css/style.css">
</head>
<body>
  <header>
    <nav class=" navbar navbar-expand-lg">
      <div class="col-lg-10 container-fluid">
        <!-- Logo aqui POSICIONADO A LA IZQUIERDA-->
        <a class="navbar-brand" href="../brucker2.0/home.php">
          <img src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo Brücker" height="100">
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
<!--                <li><a class="dropdown-item" href="../brucker2.0/exclusividad.php">La exclusividad</a></li> -->
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

  <div class="img-fluid portada-detallePropiedades">
            <div class="cover-text"></div>
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
<section class="container container-new">
<?php
// Verificar si se proporcionó un ID de noticia en la URL
if(isset($_GET['id'])) {
    // Obtener el ID de la noticia de la URL
    $id = $_GET['id'];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "bd_de_prueba";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consultar la base de datos para obtener la información de la noticia
    $sql = "SELECT * FROM noticia_prueba WHERE id = $id";
    $result = $conn->query($sql);

    // Verificar si se encontró la noticia
    if ($result->num_rows > 0) {
        // Mostrar la información de la noticia
        $row = $result->fetch_assoc();
        echo "<div class='news-article'>";?>

<?php
        echo "<div class='news-title mb-4'>" . $row['title'] . "</div>"; ?>
        <legend></legend>
        <?php
        echo "<img src='" . $row['imagen'] . "' class='image-text-container mb-4' alt='Imagen'>";
        
        echo "<h3 class='news-subtitle mb-4'>" . $row['subtitle'] . "</h3>";
        echo "<p class='news-content mb-4'>" . $row['content'] . "</p>";
        echo "<img src='" . $row['additional_image'] . "' class='img-fluid mb-4' alt='Imagen adicional'>";
        echo "<p class='news-additional-content'>" . $row['additional_content'] . "</p>";
        echo "</div>";
    } else {
        // Mostrar un mensaje si no se encuentra la noticia
        echo "<p>No se encontró la noticia.</p>";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    // Mostrar un mensaje si no se proporciona un ID de noticia en la URL
    echo "<p>No se proporcionó un ID de noticia.</p>";
}
?>


</section>
<figure>
    <blockquote class="container blockquote">
        <p>Damián Gari</p>
    </blockquote>
    <figcaption class="container blockquote-footer">
        Corredor Inmobiliario - <cite title="Source Title">Fundador - CEO de BRÜCKER</cite>
    </figcaption>
</figure>

  <!--Turnero-->
  <section class="turnero">
    <div class="headTurnero">
      <h2>CONSULTORÍA GRATUITA</h2>
      <h4>¿Querés dar el primer paso hacia tu objetivo?</h4>
      <h5>Reservá una reunión de 30' con nosotros</h5>
      <hr style="border-top: 5px solid #002244; width: 8%; margin: 1rem 0;">
    </div>
        
        <!-- Principio del widget integrado de Calendly -->
<div class="calendly-inline-widget" data-url="https://calendly.com/brucker_inmo/brucker?hide_gdpr_banner=1" style="min-width:320px;height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Final del widget integrado de Calendly -->
  </section>
<!--Footer-->
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <img src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo de la empresa" class="img-fluid" style="max-height: 70px;">
                <p class="mt-3">© 2024 BRÜCKER. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-4 text-center mb-3 mb-md-0"></div>
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</body>
</html>
