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
  <link rel="stylesheet" href="../brucker2.0/css/propiedades.css">
  <link rel="stylesheet" href="../brucker2.0/css/style.css">

    <style>
        body {
            margin-top: 10%;
        }

        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            
        }
        .card:hover {
            transform: scale(1.05);
        }
     

        .card-img-top {
            object-fit: cover;
            /* Ajusta el tamaño de la imagen */
            height: 200px;
            /* Ajusta la altura de la imagen */
        }

        .card-body {
            padding: 20px;
            background-color: #f8f9fa;
            /* Fondo del cuerpo de la card */
        }

        .card-title {
            color: #fff;
            /* Color del texto */
            background-color: #002244;
            /* Color de fondo del título */
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 0 0 10px 10px;
            /* Borde inferior redondeado */
        }

        .btn {
            background-color: #002244;
            color: #fff;
            border-color: #002244;
            text-align: center;
        }

        .title-filtro {
            text-align: center;
            background-color: #002244;
            color: #fff;
            padding: 5px;
        }

        .icon {
            width: 35px;
            /* Tamaño deseado para los iconos */
            height: 30px;
        }

        .precio-propiedad {
            background-color: #C9C2B2;
            place-items: center;
            color: #fff;
            margin-bottom: 0;
            padding: 3px;
            border-radius: 5px;


        }

        .fondo-precio {
            padding: 0px;
            


        }

        .boton-atras {
            display: flexbox;
            /* Cambiado a inline-block */
            text-align: center;
            background-color: #002244;
            color: #fff;
            padding: 5px 20px;
            /* Ajusta el padding según necesites */
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s;

        }

        .boton-atras:hover {
            background-color: #C9C2B2;
        }

        .boton-pie {
            text-align: left;
            margin-top: 30px; 
            margin-bottom: 30px;
        }
        
    </style>

</head>
<body>
  <!-- ICONO DE WHATSAPP -->
<aside class="container">
  <div class="whatsapp-container">
    <a href="https://wa.me/543512010010" class="whatsapp-logo" target="_blank">
      <div class="tooltip">¿Necesitás asesoramiento?</div>
      <img src="../brucker2.0/img/logo/whatsapp-icon-green.png" alt="WhatsApp Logo">
    </a>
  </div>
</aside>

<header>
  <nav class="navbar navbar-expand-lg">
    <div class="col-lg-10 container-fluid">
      <!-- Logo aqui POSICIONADO A LA IZQUIERDA -->
      <a class="navbar-brand" href="../bruckerCopia/home.php">
        <img src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo Brücker" height="70">
      </a>
      <!-- Botón de colapsar para pantallas pequeñas -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Menú POSICIONADO A LA DERECHA -->
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
              <!-- <li><a class="dropdown-item" href="../brucker2.0/exclusividad.php">La exclusividad</a></li> -->
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
</main>

<section>
  <div class="container">
    <?php
    // Verificar si se enviaron parámetros de búsqueda
    if (isset($_GET['property_types']) && isset($_GET['operation_types'])) {
        // Construir los parámetros de búsqueda
        $search_params = array(
            "current_localization_id" => 0,
            "current_localization_type" => "country",
            "price_from" => 0,
            "price_to" => 999999999,
            "operation_types" => array($_GET['operation_types']), // Obtener el tipo de operación
            "property_types" => array($_GET['property_types']), // Obtener el tipo de propiedad
            "currency" => "ANY",
            "filters" => array()
        );

        // Construir la URL de la API con los parámetros de búsqueda
        $api_url = "https://www.tokkobroker.com/api/v1/property/search/?lang=es_ar&format=json&key=afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3&data=" . urlencode(json_encode($search_params));

        // Realizar la solicitud a la API de Tokko Broker
        $response = file_get_contents($api_url);

        // Procesar la respuesta de la API y mostrar los resultados
        $data = json_decode($response, true);
    ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                if ($data && isset($data['objects'])) {
                    foreach ($data['objects'] as $property) {
                ?>
                        <div class="col">
                            <div class="card">
                                <?php
                                if (isset($property['photos']) && is_array($property['photos']) && !empty($property['photos'])) {
                                    $first_photo = reset($property['photos']);
                                ?>
                                    <img src="<?php echo $first_photo['image']; ?>" class="card-img-top" alt="<?php echo $first_photo['description']; ?>">
                                <?php
                                } else {
                                ?>
                                    <img src="default-image.jpg" class="card-img-top" alt="Imagen no disponible">
                                <?php
                                }
                                ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $property['publication_title']; ?></h5>
                                    <p class="card-text">Dormitorios: <?php echo $property['suite_amount']; ?></p>
                                    <p class="card-text">Superficie: <?php echo $property['surface']; ?> m²</p>
                                    <?php
                                    echo '<div class="fondo-precio position-relative bottom-0 start-0 w-100 p-3;">';
                                    ?>
                                    <div class="precio-propiedad">
                                        <?php
                                        foreach ($property['operations'] as $operation) {
                                            foreach ($operation['prices'] as $price) {
                                                echo '<p> ' . $price['price'] . ' ' . $price['currency'] . '</p>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php
                                    echo '</div>';
                                    ?>
                                    <a href="detallePropiedades.php?id=<?php echo $property['id']; ?>" class="btn btn-primary">Ver Propiedad</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo 'No se encontraron resultados.';
                }
                ?>
            </div>
        </div>
    <?php
    } else {
        echo "No se han proporcionado parámetros de búsqueda.";
    }
    ?>
  </div>
</section>

  <div class="container boton-pie">
    <?php
    echo '<a href="propiedades.php?id=' . $property['id'] . '" class="boton-atras">Volver a Propiedades</a>';
    ?>
  </div>

  <!-- Footer -->
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
  <script src="/js/app.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>