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
        <a class="navbar-brand" href=".brucker2.0/home.php">
          <img src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo Brücker" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-style" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto justify-content-end">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="../brucker2.0/home.php"><b>Home</b></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>Nosotros</b></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../brucker2.0/quienesSomos.php">Quiénes somos</a></li>
                <li><a class="dropdown-item" href="../brucker2.0/exclusividad.php">La exclusividad</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>Servicios</b></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../brucker2.0/comprar.php">Comprar</a></li>
                <li><a class="dropdown-item" href="../brucker2.0/vender.php">Vender</a></li>
                <li><a class="dropdown-item" href="../brucker2.0/tasar.php">Tasar</a></li>
                <li><a class="dropdown-item" href="../brucker2.0/invertir.php">Invertir</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="../brucker2.0/propiedades.php"><b>Propiedades</b></a></li>
            <li class="nav-item"><a class="nav-link" href="../brucker2.0/novedades.php"><b>Novedades</b></a></li>
            <li class="nav-item"><a class="nav-link" href="../brucker2.0/contacto.php"><b>Contacto</b></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>

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

      <div class="title-propiedades-pag">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-9 order-md-1 p-4 text-title">
            <h3>PROPIEDADES</h3>
          </div>
        </div>
      </div>




      <div class="container p-4 mb-5 mt-5 bg-opacity-10 bg-info shadow rounded form-select" multiple aria-label="multiple select example">
        <h3 class="mb-4">Buscar Propiedades</h3>
        <form action="search_properties.php" method="get">
        
          <div class="form-group mb-3">
            <label for="operation_types">Tipo de Operación:</label>
            <select id="operation_types" name="operation_types" class="form-control">
              <option value="1">Venta</option>
              <option value="2">Alquiler</option>
              <option value="3">Alquiler Temporal</option>
              <!-- Agrega más opciones según sea necesario -->
            </select>
          </div>
          <div class="form-group mb-3">
            <label for="property_types">Tipo de Propiedad:</label>
            <select id="property_types" name="property_types" class="form-control">
              <option value='-1'>Select a Property Type</option>
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
              echo '<div class="card h-100 d-flex flex-column">';
              if (isset($property['photos']) && is_array($property['photos']) && !empty($property['photos'])) {
                $first_photo = reset($property['photos']);
                echo '<div class="property-image">';
                echo '<img src="' . $first_photo['image'] . '" class="card-img-top" alt="' . $first_photo['description'] . '">';
                echo '</div>';
              } else {
                echo '<div class="property-image">';
                echo '<img src="default-image.jpg" class="card-img-top" alt="Imagen no disponible">';
                echo '</div>';
              }

              echo '<div class="card-body d-flex flex-column">';
              echo '<h5 class="card-title p-3 mb-4 bg-primary bg-opacity-50 shadow text-dark text-center rounded">' . $property['publication_title'] . '</h5>';
              echo '<div class="property-details text-left flex-grow-1">';
              echo '<div class="icon-text"><i class="bi bi-house-door-fill"></i> <strong>Dormitorios:</strong> ' . $property['suite_amount'] . '</div>';
              echo '<div class="icon-text"><i class="bi bi-rulers"></i> <strong>Superficie:</strong> ' . $property['surface'] . ' m²</div>';
              echo '</div>';
              echo '<div class="precio-propiedad">';
              foreach ($property['operations'] as $operation) {
                foreach ($operation['prices'] as $price) {
                  echo '<strong></strong> ' . $price['price'] . ' ' . $price['currency'];
                }
              }
              echo '</div>';
              echo '<div class="btn-container mt-auto">';
              echo '<a href="detallePropiedades.php?id=' . $property['id'] . '" class="btn btn-primary blue-button">Ver Propiedad</a>';
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
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center mb-3 mb-md-0">
          <img src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo de la empresa" class="img-fluid" style="max-height: 70px;">
          <p class="mt-3">© 2024 Brücker. Todos los derechos reservados.</p>
        </div>
        <div class="col-md-4 text-center mb-3 mb-md-0"></div>
        <div class="col-md-4 text-center">
          <ul class="list-inline social-icons mt-3">
            <li class="list-inline-item"><a href="https://wa.me/543512010010"><i class="bi bi-whatsapp"></i></a></li>
            <li class="list-inline-item"><a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://www.linkedin.com"><i class="bi bi-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kuE+3A4D2UkWQ+e9K+kTxD9DfIBFAyuI36kl/eXl5x1gWmBq3slh0vffo6CFz8VD" crossorigin="anonymous"></script>
</body>

</html>