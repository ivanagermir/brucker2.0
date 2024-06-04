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
  <link rel="stylesheet" href="../brucker2.0/css/style.css">
  <link rel="stylesheet" href="../brucker2.0/css/propiedades.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
</head>

<body>
  <header>
  <nav class="navbar navbar-expand-lg">
      <div class="col-lg-10 container-fluid">
        <!-- Logo aqui POSICIONADO A LA IZQUIERDA-->
        <a class="navbar-brand" href="../bruckerCopia/home.php">
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
    <div class="img-fluid portada-propiedades">
      <div class="container cover-text">
        <h1 class="display-4">PROPIEDADES</h1>
        <hr style="border-top: 5px solid #000000; width: 10%; margin: 1rem 0;">
      </div>
    </div>

    <aside>
      <div class="container">
        <div class="whatsapp-container">
          <a href="https://wa.me/543512010010" class="whatsapp-logo" target="_blank">
            <div class="tooltip">¿Necesitás asesoramiento?</div>
            <img src="../brucker2.0/img/logo/whatsapp-icon-green.png" alt="WhatsApp Logo">
          </a>
        </div>
      </div>
    </aside>

    <section>

      <section class="container">


        <div class="container-filtro-bg">
          <div class="container container-filtro p-4 mb-5 mt-5 shadow rounded form-select">
            <h3 class="title-filtro mb-4">Filtro</h3>
            <form action="search_properties.php" method="get">
              <div class="form-group mb-3">
                <label for="operation_types">Tipo de Operación:</label>
                <select id="operation_types" name="operation_types" class="form-control">
                <option value='-1'>Seleccionar tipo de operación</option>
                  <option value="1">Venta</option>
                  <option value="2">Alquiler</option>
                  <option value="3">Alquiler Temporal</option>
                  <!-- Agrega más opciones según sea necesario -->
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="property_types">Tipo de Propiedad:</label>
                <select id="property_types" name="property_types" class="form-control">
                  <option value='-1'>Seleccionar tipo de propiedad</option>
                  <option value='1'>Land / Terreno</option>
                  <option value='2'>Appartment / Departamento</option>
                  <option value='3'>House / Casa</option>
                  <option value='4'>Weekend House</option>
                  <option value='5'>Office / Oficina</option>
                  <option value='6'>Mooring</option>
                  <option value='7'>Bussiness Premises</option>
                  <option value='8'>Commercial Building</option>
                  <!-- Agrega más opciones según sea necesario -->
                </select>
              </div>
              <div class="form-group mt-4">
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
              </div>
            </form>
          </div>
        </div>
      </section>



      <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
  // Realizar la solicitud a la API de Tokko Broker para obtener los datos de las propiedades
  $url = 'http://www.tokkobroker.com/api/v1/property/?limit=10&offset=0&lang=es_ar&format=json&key=afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3';
  $response = file_get_contents($url);
  $data = json_decode($response, true);

  if ($data && isset($data['objects'])) {
    foreach ($data['objects'] as $property) {
      echo '<div class="col">';
      echo '<div class="card h-100 position-relative">';
      if (isset($property['photos']) && is_array($property['photos']) && !empty($property['photos'])) {
        $first_photo = reset($property['photos']);
        echo '<img src="' . $first_photo['image'] . '" class="card-img-top" alt="' . $first_photo['description'] . '">';
      } else {
        echo '<img src="default-image.jpg" class="card-img-top" alt="Imagen no disponible">';
      }

      echo '<div class="fondo-precio position-relative bottom-0 start-0 w-100 p-3;">'; 
      echo '<div class="precio-propiedad">';
      foreach ($property['operations'] as $operation) {
        foreach ($operation['prices'] as $price) {
          echo '<p> ' . $price['price'] . ' ' . $price['currency'] . '</p>';
        }
      }
      echo '</div>';
      echo '</div>';

      echo '<div class="card-body" style="padding-top: 10px;">'; // Aumentar el espacio entre el título y el cuerpo de la tarjeta
      echo '<h5 class="card-title">' . $property['publication_title'] . '</h5>';
      echo '<div class="d-flex justify-content-between align-items-center mb-3">';
      echo '<p class="card-icon"><img src="../brucker2.0/img/icons/dormitorios.jpg" alt="icono cama" class="icon"> ' .   $property['suite_amount'] . '  </p>';
      echo '<p class="card-text"><img src="../brucker2.0/img/icons/superficie.jpg" alt="icono superficie" class="icon"> ' .  $property['surface'] . '  m²</p>';
      echo '</div>';

      echo '<div class="text-center">'; // Centrar el botón
      echo '<a href="detallePropiedades.php?id=' . $property['id'] . '" class="btn btn-outline-primary mt-3">Ver Propiedad</a>'; // Mover el botón hacia el centro
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
  } else {
    echo 'Error al obtener las propiedades.';
  }
?>
        </div>
      </div>

    </section>

  </main>
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

      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="/js/app.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </body>

</html>