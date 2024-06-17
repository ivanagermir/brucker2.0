<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRÜCKER</title>
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
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="../bruckerCopia/home.php">
                    <img src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo Brücker" height="70">
                </a>
                <!-- Botón de colapsar para pantallas pequeñas -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menú -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../brucker2.0/home.php"><b>Home</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>Nosotros</b></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../brucker2.0/quienesSomos.php">Quiénes somos</a></li>
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

        <section class="container mt-4">
            <?php
            // Verificar si se recibió un ID válido de la propiedad a través de la URL
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $property_id = $_GET['id'];

                // Realizar la solicitud a la API de Tokko Broker para obtener los detalles de la propiedad con el ID proporcionado
                $url = 'http://www.tokkobroker.com/api/v1/property/' . $property_id . '/?lang=es_ar&format=json&key=afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3';
                $response = file_get_contents($url);
                $property = json_decode($response, true);

                // Verificar si se obtuvieron los detalles de la propiedad
                if ($property && isset($property['id'])) {
            ?>
                    <div class="title-propertie">
                        <legend><?php echo $property['publication_title']; ?></legend>
                        <div class="subtitle">
                            <div class="property-price">
                                <?php
                                foreach ($property['operations'] as $operation) {
                                    foreach ($operation['prices'] as $price) {
                                        echo '<p>' . $price['price'] . ' ' . $price['currency'] . '</p>';
                                    }
                                }
                                ?>
                            </div>
                            <div class="card-operation">
                                <?php
                                foreach ($property['operations'] as $operation) {
                                    echo '<p>' . $operation['operation_type'] . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="row">
                        <!-- Carrusel principal -->
                        <div class="col-md-9">
                            <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php foreach ($property['photos'] as $index => $photo) : ?>
                                        <?php $active = $index === 0 ? 'active' : ''; ?>
                                        <div class="carousel-item <?php echo $active; ?>">
                                            <img src="<?php echo $photo['image']; ?>" class="d-block w-100" alt="<?php echo $photo['description']; ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Siguiente</span>
                                </button>
                            </div>
                        </div>

                        <!-- Miniaturas -->
                        <div class="col-md-3">
                            <div class="carousel-thumbnails-container">
                                <div id="carouselThumbnails" class="carousel-thumbnails">
                                    <?php foreach ($property['photos'] as $index => $photo) : ?>
                                        <?php $active = $index === 0 ? 'active' : ''; ?>
                                        <div class="carousel-thumbnail-item <?php echo $active; ?>" data-bs-target="#propertyCarousel" data-bs-slide-to="<?php echo $index; ?>">
                                            <img src="<?php echo $photo['image']; ?>" class="d-block w-100" alt="<?php echo $photo['description']; ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col-md-8">
                            <div class="property-details">
                                <div class="property-features">
                                <legend>Características</legend>
                                    <p><strong>Código de Referencia: </strong><?php echo $property['reference_code']; ?></p>
                                    <p><strong>Habitaciones:</strong> <?php echo $property['room_amount']; ?></p>
                                    <p><strong>Baños:</strong> <?php echo $property['bathroom_amount']; ?></p>
                                    <p><strong>Superficie:</strong> <?php echo $property['surface'] . ' ' . $property['surface_measurement']; ?></p>
                                    <p><strong>Disposición:</strong> <?php echo $property['disposition']; ?></p>
                                    <p><strong>Dirección:</strong> <?php echo $property['fake_address']; ?></p>
                                    <p><strong>Ubicación:</strong> <?php echo $property['location']['full_location']; ?></p>
                                    <p><strong>Latitud:</strong> <?php echo $property['location']['latitude']; ?></p>
                                    <p><strong>Longitud:</strong> <?php echo $property['location']['longitude']; ?></p>
                                    <p><strong>Orientación:</strong> <?php echo $property['orientation']; ?></p>
                                    <p><strong>Estacionamientos:</strong> <?php echo $property['parking_lot_amount']; ?></p>
                                    <p><strong>Situación:</strong> <?php echo $property['situation']; ?></p>
                                </div>
                            </div>

                            <div class="property-description mt-4">
                                <legend>Descripción</legend>
                                <p><?php echo $property['rich_description']; ?></p>
                            </div>

                            
                        </div>
                        <div class="col-md-4 contacto bg-light p-3">
                            <legend>Contacto</legend>
                            <div class="column-contact">
                                <p><strong>Email:</strong> <?php echo $property['producer']['email']; ?></p>
                                <p><strong>Celular:</strong> <?php echo $property['producer']['cellphone']; ?></p>
                            </div>
                            <!-- Formulario de contacto -->
                             <legend></legend>
                            <div class="contact-form mt-4">
                                <form action="https://formsubmit.co/damian.gariok@gmail.com" method="POST">
                                    <div class="mb-1">
                                        <label for="inputNombre" class="form-label">Nombre</label>
                                        <input type="text" name="Nombre" class="form-control" id="inputNombre">
                                    </div>
                                    <div class="mb-1">
                                        <label for="inputTelefono" class="form-label">Teléfono</label>
                                        <input type="text" name="Teléfono" class="form-control" id="inputTelefono">
                                    </div>
                                    <div class="mb-1">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="inputEmail">
                                    </div>
                                    <div class="mb-1">
                                        <label for="inputMensaje" class="form-label">Mensaje</label>
                                        <textarea name="Mensaje" class="form-control" id="inputMensaje" rows="3" placeholder="opcional"></textarea>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn blue-button btn-primary">Enviar</button>
                                    </div>
                                    <input type="hidden" name="_template" value="table">
                                    <input type="hidden" name="_captcha" value="false">
                                    <input type="hidden" name="_next" value="http://localhost/brucker2.0/detallePropiedades.php">
                                </form>
                            </div>
                        </div>
                    </div>
            <?php
                } else {
                    echo '<p>No se encontraron detalles de la propiedad con el ID proporcionado.</p>';
                }
            } else {
                echo '<p>No se proporcionó un ID de propiedad válido.</p>';
            }
            ?>
            <a href="propiedades.php" class="btn btn-secondary mt-3">Volver a Propiedades</a>
        </section>
   

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR4pK3f5kB5Np5+8hNfES5P2mF0xJ5p6yXZ7E6Msh" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-dm0CpcVf5Qd44vCg8bqD2WtH4OLnP5wUbAATjx5gIiwMIydKMl8Bd5LtEIP7gs7" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Función para desplazar las miniaturas hacia arriba y mostrar la miniatura en la imagen principal
            $('#carouselThumbnails .carousel-thumbnail-item').on('click', function() {
                var slideIndex = $(this).attr('data-bs-slide-to');
                $('#propertyCarousel').carousel(parseInt(slideIndex));
                $('#carouselThumbnails .carousel-thumbnail-item').removeClass('active');
                $(this).addClass('active');

                // Desplazar las miniaturas hacia arriba para mostrar la imagen principal
                var thumbnailPosition = $(this).position().top;
                var containerScrollTop = $('.carousel-thumbnails-container').scrollTop();
                var containerHeight = $('.carousel-thumbnails-container').height();
                $('.carousel-thumbnails-container').animate({
                    scrollTop: containerScrollTop + thumbnailPosition - containerHeight / 2 + $(this).height() / 2
                }, 500);
            });

            // Ocultar barra de desplazamiento vertical
            $('.carousel-thumbnails-container').on('mouseenter', function() {
                $(this).css('overflow-y', 'hidden');
            }).on('mouseleave', function() {
                $(this).css('overflow-y', 'auto');
            });

            // Sincronización al deslizar en el carrusel principal
            $('#propertyCarousel').on('slid.bs.carousel', function(event) {
                var slideIndex = $(event.relatedTarget).index();
                $('#carouselThumbnails .carousel-thumbnail-item').removeClass('active');
                $('#carouselThumbnails .carousel-thumbnail-item[data-bs-slide-to="' + slideIndex + '"]').addClass('active');

                // Desplazar las miniaturas hacia arriba para mostrar la imagen principal
                var $activeThumbnail = $('#carouselThumbnails .carousel-thumbnail-item[data-bs-slide-to="' + slideIndex + '"]');
                var thumbnailPosition = $activeThumbnail.position().top;
                var containerScrollTop = $('.carousel-thumbnails-container').scrollTop();
                var containerHeight = $('.carousel-thumbnails-container').height();
                $('.carousel-thumbnails-container').animate({
                    scrollTop: containerScrollTop + thumbnailPosition - containerHeight / 2 + $activeThumbnail.height() / 2
                }, 500);
            });
        });
    </script>




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
    <script src="/app.js"></script>
</body>

</html>