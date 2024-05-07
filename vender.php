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
    <link rel="stylesheet" href="../bruckerCopia/css/style.css">
    <link rel="stylesheet" href="../bruckerCopia/css/vender.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
</head>
 

<body >
  <header>
    <nav class=" navbar navbar-expand-lg">
      <div class="col-lg-10 container-fluid">
        <!-- Logo aqui POSICIONADO A LA IZQUIERDA-->
        <a class="navbar-brand" href="/html/index.html">
          <img src="../bruckerCopia/img/logo/PNG/sinFondocompleto.png" alt="Logo Brücker" height="70">
        </a>
        <!-- Botón de colapsar para pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menú POSICIONADO A LA DERECHA-->
        <div class="collapse navbar-collapse navbar-style" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto justify-content-end">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../bruckerCopia/home.php"><b>Home</b></a>
            </li>
            <!-- desplegable nosotros -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <b>Nosotros</b>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../bruckerCopia/quienesSomos.php">Quiénes somos</a></li>
                <li><a class="dropdown-item" href="../bruckerCopia/exclusividad.php">La exclusividad</a></li>
              </ul>
            </li>
            <!-- desplegable servicios -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <b>Servicios</b>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../bruckerCopia/comprar.php">Comprar</a></li>
                <li><a class="dropdown-item" href="../bruckerCopia/vender.php">Vender</a></li>
                <li><a class="dropdown-item" href="../bruckerCopia/tasar.php">Tasar</a></li>
                <li><a class="dropdown-item" href="../bruckerCopia/invertir.php">Invertir</a></li>
              </ul>
            </li>
            <!-- nav propiedades-novedades-contacto -->
            <li class="nav-item">
              <a class="nav-link" href="../bruckerCopia/propiedades.php"><b>Propiedades</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../bruckerCopia/novedades.php"><b>Novedades</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../bruckerCopia/contacto.php"><b>Contacto</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <main>
    <!--Portada-->
    <div class="img-fluid portada-vender">
        <div class="container cover-text">
        <h1 class="display-4">QUIERO VENDER</h1>
        <hr style="border-top: 5px solid #000000; width: 10%; margin: 1rem 0;">
        </div>
    </div>

    <!-- ICONO DE WHATSAPP -->
    <aside>
      <div class="container">
        <div class="whatsapp-container">
          <a href="https://wa.me/543512010010" class="whatsapp-logo" target="_blank">
            <div class="tooltip">¿Necesitás asesoramiento?</div>
            <img src="../bruckerCopia/img/logo/whatsapp-icon-green.png" alt="WhatsApp Logo">
          </a>
        </div>
      </div>
    </aside>
    
    <section class="title">
      <h3 class="title-vender">¿Querés <strong>VENDER</strong> una propiedad?</h3>
      <h3 class="subtitle-vender">TE EXPLICO CÓMO TE AYUDAMOS</h3>
    </section>

    <!-- Tarjetas con pasos para vender -->
    <section>
      <div class="container-cards-vender">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100" data-aos="fade-down">
              <img src="../bruckerCopia/img/img-vender/paso1.jpg" class="card-img-top" alt="Visita a la propiedad">
              <div class="card-body">
                <h5 class="card-title">1</h5>
                <p class="card-text">Visitamos y analizamos tu propiedad</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" data-aos="fade-down">
              <img src="../bruckerCopia/img/img-vender/paso2.jpg" class="card-img-top" alt="Calculando">
              <div class="card-body">
                <h5 class="card-title">2</h5>
                <p class="card-text">“La tasación” analizamos el mercado.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
              <img src="../bruckerCopia/img/img-vender/paso3.jpg" class="card-img-top" alt="Manos estrechadas">
              <div class="card-body">
                <h5 class="card-title">3</h5>
                <p class="card-text">Acordamos El Precio de comercialización.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" data-aos="fade-down">
              <img src="../bruckerCopia/img/img-vender/paso4.jpg" class="card-img-top" alt="Escritorio">
              <div class="card-body">
                <h5 class="card-title">4</h5>
                <p class="card-text">Creamos el mejor plan de marketing acorde a tu propiedad. Realizamos fotos y videos profesionales.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" data-aos="fade-down">
              <img src="../bruckerCopia/img/img-vender/paso5.jpg" class="card-img-top" alt="notebook, tablet y móviles">
              <div class="card-body">
                <h5 class="card-title">5</h5>
                <p class="card-text">Te brindamos un plan de máxima exposición, 11 portales, cartelería, flyer, email marketing y una red de mas de 400 colegas. Te informaremos semanalmente los avances de tu propiedad.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
              <img src="../bruckerCopia/img/img-vender/paso6.jpg" class="card-img-top" alt="Reunión">
              <div class="card-body">
                <h5 class="card-title">6</h5>
                <p class="card-text">Te asesoramos acerca de como presentar tu propiedad al momento de una muestra. </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" data-aos="fade-down">
              <img src="../bruckerCopia/img/img-vender/paso7.jpg" class="card-img-top" alt="Carpeta">
              <div class="card-body">
                <h5 class="card-title">7</h5>
                <p class="card-text">Filtraremos correctamente los potenciales compradores.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" data-aos="fade-down">
              <img src="../bruckerCopia/img/img-vender/paso8.jpg" class="card-img-top" alt="Carpeta">
              <div class="card-body">
                <h5 class="card-title">8</h5>
                <p class="card-text">Negociaremos el mejor acuerdo para vos. Lo hacemos por escrito.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100" data-aos="fade-down">
              <img src="../bruckerCopia/img/img-vender/paso9.jpg" class="card-img-top" alt="Firma">
              <div class="card-body">
                <h5 class="card-title">9</h5>
                <p class="card-text">Te acompañamos a escribanía
                </p>
              </div>
            </div>
          </div>
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
      <hr style="border-top: 5px solid #002244; width: 10%; margin: 1rem 0;">
    </div>
    <!-- Principio del widget integrado de Calendly -->
<div class="calendly-inline-widget" data-url="https://calendly.com/brucker_inmo/30min?primary_color=002244" style="min-width:320px;height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Final del widget integrado de Calendly -->
  </section>

<!--Footer-->
<footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center mb-3 mb-md-0">
          <img src="../bruckerCopia/img/logo/PNG/sinFondocompleto.png" alt="Logo de la empresa" class="img-fluid" style="max-height: 70px;">
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
  <script>
    AOS.init({
      duration:1000,
      once:true
    });
  </script>
</body>
</html>