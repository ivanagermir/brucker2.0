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
    <link rel="stylesheet" href="../brucker2.0/css/detallePropiedad.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
    <header>

        <nav class=" navbar navbar-expand-lg">
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
        <!-- ICONO DE WHATSAPP -->
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


            <?php
            // Verificar si se recibió un ID válido de la propiedad a través de la URL
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $property_id = $_GET['id'];

                // Realizar la solicitud a la API de Tokko Broker para obtener los detalles de la propiedad con el ID proporcionado
                $url = 'http://www.tokkobroker.com/api/v1/property/' . $property_id . '/?lang=es_ar&format=json&key=afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3';
                $response = file_get_contents($url);
                $property = json_decode($response, true);

            ?>
                <div class="container contenedor-propiedades">
                    <?php
                    // Verificar si se obtuvieron los detalles de la propiedad
                    if ($property && isset($property['id'])) {
                        // Mostrar las imágenes en un carrusel
                        ?>
                        <div class="title-propiedades-pag">
                        <?php
                        echo '<h1>' . $property['publication_title'] . '</h1>';
                        echo '<div class="precio-propiedad">';
                        foreach ($property['operations'] as $operation) {
                            foreach ($operation['prices'] as $price) {
                                echo '<strong></strong> ' . $price['price'] . ' ' . $price['currency'];
                            }
                        }
                        echo '</div>';
                        ?>
                        
                        </div>

                        
                        <?php
                        echo '<div class="carousel">';
                        echo '<div class="carousel-inner">';
                        foreach ($property['photos'] as $index => $photo) {
                            $active = $index === 0 ? 'active' : '';
                            echo '<div class="carousel-item ' . $active . '">';
                            echo '<img src="' . $photo['image'] . '" alt="' . $photo['description'] . '">';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '<button class="carousel-control-prev" onclick="prevSlide()" aria-label="Previous">&lt;</button>';
                        echo '<button class="carousel-control-next" onclick="nextSlide()" aria-label="Next">&gt;</button>';
                        echo '</div>';

                        
                    ?>
                        <div class="caracteristicas-propiedades">

                            <fieldset>
                                <legend>Caracteristicas</legend>
                                <div class="column">
                                    <?php
                                    // detalles de la propiedad
                                    echo '<p><strong>Habitaciones:</strong> ' . $property['room_amount'] . '</p>';
                                    echo '<p><strong>Baños:</strong> ' . $property['bathroom_amount'] . '</p>';
                                    echo '<p><strong>Superficie:</strong> ' . $property['surface'] . ' ' . $property['surface_measurement'] . '</p>';
                                    echo '<p><strong>Disposición:</strong> ' . $property['disposition'] . '</p>';
                                    echo '<p><strong>Dirección:</strong> ' . $property['fake_address'] . '</p>';
                                    echo '<p><strong>Ubicación:</strong> ' . $property['location']['full_location'] . '</p>';
                                    echo '<p><strong>Orientation:</strong> ' . $property['orientation'] . '</p>';
                                    echo '<p><strong>Estacionamientos:</strong> ' . $property['parking_lot_amount'] . '</p>';
                                    echo '<p><strong>Situación:</strong> ' . $property['situation'] . '</p>';
                                    ?>

                                </div>
                            </fieldset>


                            <fieldset>
                                <legend>Contacto</legend>
                                <div class="column">
                                    <?php
                                    echo '<p><strong>Email:</strong> ' . $property['producer']['email'] . '</p>';
                                    echo '<p><strong>Celular:</strong> ' . $property['producer']['cellphone'] . '</p>';

                                    ?>
                                </div>

                            </fieldset>

                            <fieldset>
                                <legend>Tipo de Operación</legend>
                                <?php
                                echo '<p><strong>Disponible:</strong></p>';
                                echo '<ul>';
                                foreach ($property['operations'] as $operation) {
                                    echo '<strong></strong> ' . $operation['operation_type'];
                                    echo '<ul>';
                                }
                                ?>
                            </fieldset>




                        </div>

                        <div class="descripcion_propiedades">
                            <?php
                            echo '<p><strong></strong> ' . $property['rich_description'] . '</p>';
                            // Mostrar las operaciones (ventas, alquileres, etc.)

                            echo '</ul>';

                            echo '<a href="propiedades.php?id=' . $property['id'] . '" class="boton-atras">Volver a Propiedades</a>';
                            ?>


                        </div>

                </div>

        <?php
                        // Mostrar más detalles según sea necesario
                    } else {
                        echo 'No se encontraron detalles de la propiedad con el ID proporcionado.';
                    }
                } else {
                    echo 'No se proporcionó un ID de propiedad válido.';
                }
        ?>



        <script>
            let currentSlide = 0;
            const slides = document.querySelectorAll('.carousel-item');
            const totalSlides = slides.length;

            function showSlide(index) {
                if (index < 0) {
                    currentSlide = totalSlides - 1;
                } else if (index >= totalSlides) {
                    currentSlide = 0;
                } else {
                    currentSlide = index;
                }

                slides.forEach((slide, i) => {
                    if (i === currentSlide) {
                        slide.classList.add('active');
                    } else {
                        slide.classList.remove('active');
                    }
                });
            }

            function nextSlide() {
                showSlide(currentSlide + 1);
            }

            function prevSlide() {
                showSlide(currentSlide - 1);
            }

            showSlide(currentSlide);
        </script>

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
    <script src="/app.js"></script>
</body>

</html>