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
  <link rel="stylesheet" href="../brucker2.0/css/home.css">
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

  <main>
    <!--Portada-->
    <div class="jumbotron jumbotron-fluid">
      <div class="cover-text">
        <h4>LOGRAMOS TU OBJETIVO JUNTOS</h4>
        <h1 class="container display-4">BRÜCKER es el puente entre vos y tus metas y objetivos inmobiliarios</h1>
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

    <!-- Cards: Comprar, vender, tasar, invertir-->
    <section class="card-section">
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
          <div class="container card-first h-100" data-aos="fade-up">
            <div class="card-body">
              <p class="card-title fs-4 fw-light">¿CÓMO PODEMOS </p>
              <h2 class="card-text fs-2 fw-bold">AYUDARTE?</h2>
              <hr style="border-top: 2px solid #fff; width: 20%; margin: 1rem 0;">
              <ul class="list-inline social-icons mt-3">
                <li class="list-inline-item"><a href="https://wa.me/543512010010" target="_blank"><i class="bi bi-whatsapp"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/brucker.ok?igsh=MWI0Z2U3OHpoajBjeQ==" target="_blank"><i class="bi bi-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <a href="../brucker2.0/comprar.php" class="card-link">
            <div class="card h-100" data-aos="fade-up">
              <img src="../brucker2.0/img/img-cards/card-comprar.png" class="card-img-top" alt="Mudanza">
              <div class="card-body">
                <h5 class="card-title">QUIERO COMPRAR</h5>
                <a class="btn btn-primary blue-button" href="../brucker2.0/comprar.php" role="button">Más</a>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="../brucker2.0/vender.php" class="card-link">
          <div class="card h-100" data-aos="fade-up">
            <img src="../brucker2.0/img/img-cards/card-vender.png" class="card-img-top" alt="Llaves">
            <div class="card-body">
              <h5 class="card-title">QUIERO VENDER</h5>
              <a class="btn btn-primary blue-button" href="../brucker2.0/vender.php" role="button">Más</a>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <div class="card h-100 justify-content-center p-5" data-aos="fade-up">
            <img src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo">
          </div>
        </div>
        <div class="col">
          <a href="../brucker2.0/tasar.php" class="card-link">
          <div class="card h-100" data-aos="fade-up">
            <img src="../brucker2.0/img/img-cards/card-tasar.png" class="card-img-top" alt="Tramites">
            <div class="card-body">
              <h5 class="card-title">QUIERO TASAR</h5>
              <a class="btn btn-primary blue-button" href="../brucker2.0/tasar.php" role="button">Más</a>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <a href="../brucker2.0/invertir.php" class="card-link">
          <div class="card h-100" data-aos="fade-up">
            <img src="../brucker2.0/img/img-cards/card-invertir.png" class="card-img-top" alt="Trámites">
            <div class="card-body">
              <h5 class="card-title">QUIERO INVERTIR</h5>
              <a class="btn btn-primary blue-button" href="../brucker2.0/invertir.php" role="button">Más</a>
            </div>
          </div>
          </a>
        </div>
      </div>
    </section>

    <!-- PROPOSITO -->
    <section class="container-fluid proposito-section" id="proposito">
      <div class="proposito-overlay">
        <h2 class="container proposito-title fs-2" data-aos="zoom-in">¿Por qué <strong>ELEGIRNOS</strong>?</h2>
        <h6 class="container text-principal text-center">
          Nuestro PROPÓSITO es poner al cliente como protagonista, ofreciendo un servicio diferente,
          profesional, de excelencia y compromiso. Somos el PUENTE que conecta a las personas con sus
          sueños, brindándoles una nueva forma de vivir la experiencia inmobiliaria.
        </h6>
      </div>
    </section>
 
    <!-- TESTIMONIOS -->
    <?php
      // Conectar a la base de datos
      $conn = new mysqli('localhost', 'root', 'admin', 'bd_de_prueba');

      // Obtener los testimonios de la base de datos
      $query = "SELECT * FROM comentarios";
      $result = $conn->query($query);

      // Verificar si hay testimonios
      if ($result->num_rows > 0) {
          // Imprimir la sección de testimonios
          echo "<section class='container section-testimonials'>";
          echo "<div class='testimonials-title'>";
          echo "<h3>Nuestros clientes <strong class='text-uppercase'>dicen...</strong></h3>";
          echo "</div>";
          echo "<div class='row'>";

          // Iterar sobre los testimonios y generar las tarjetas
          while ($row = $result->fetch_assoc()) {
              echo "<div class='col-sm-6'>";
              echo "<div class='card' data-aos='fade-right'>";
              echo "<div class='card-body'>";
              echo "<p class='card-text'>" . $row['comment'] . "</p>";
              echo "<h5 class='card-title text-uppercase'>" . $row['name'] . "</h5>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
          }

          echo "</div>";
          echo "</section>";
      } else {
          echo "No hay testimonios disponibles";
      }

      // Cerrar la conexión
      $conn->close();
  ?>

  <!-- PROPIEDADES -->
  <?php
    // Conectar a la base de datos
    $conn = new mysqli('localhost', 'root', 'admin', 'bd_de_prueba');

    // Obtener la lista de videos de la base de datos
    $query = "SELECT * FROM videos";
    $result = $conn->query($query);

    // Almacenar los nombres de los videos en un array
    $videos = array();
    while ($row = $result->fetch_assoc()) {
        $videos[] = $row['video'];
    }

    // Seleccionar un video al azar
    $random_video = $videos[array_rand($videos)];

    // Cerrar la conexión
    $conn->close();
  ?>
    <section class="container properties text-center">
      <div class="row align-items-center">
        <div class="col">
          <video id="randomVideo" class="img-fluid custom-video" controls>
            <!-- Fuente del video será añadida por JavaScript -->
            <source src="videos_save/<?php echo $random_video; ?>" type="video/mp4">
          </video>
        </div>
        <div class="col text-properties">
          <h3>PROPIEDADES</h3>
          <p>Encontrá tu lugar ideal con nuestro buscador de propiedades</p>
          <a class="btn btn-primary light-button" href="../brucker2.0/propiedades.php" role="button">Ver Propiedades</a>
        </div>
      </div>
    </section>
  </main>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init();
    });
    AOS.init({
      duration: 1500,
      once: true
    });

    // Videos obtenidos de PHP
    const videos = <?php echo json_encode($videos); ?>;

    // Seleccionar un video aleatorio
    function getRandomVideo() {
      const randomIndex = Math.floor(Math.random() * videos.length);
      return videos[randomIndex];
    }

    // Asignar el video aleatorio al elemento video
    document.addEventListener("DOMContentLoaded", () => {
      const randomVideo = getRandomVideo();
      const videoElement = document.getElementById("randomVideo");
      if (randomVideo) {
        videoElement.innerHTML = `<source src="${randomVideo}" type="video/mp4">Tu navegador no soporta el elemento de video.`;
      }
    });
  </script>
</body>

</html>