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
    <link rel="stylesheet" href="../brucker2.0/css/quienesSomos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
</head>

<body >
  <header>
    <nav class=" navbar navbar-expand-lg">
      <div class="col-lg-10 container-fluid">
        <!-- Logo aqui POSICIONADO A LA IZQUIERDA-->
        <a class="navbar-brand" href="../bruckerCopia/home.php">
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
  
  <!--Portada-->
  <main>
    <div class="img-fluid portada-quienesSomos">
        <div class="container cover-text">
        <h1 class="display-4">QUIENES SOMOS</h1>
        <hr style="border-top: 5px solid #000000; width: 10%; margin: 1rem 0;">
        </div>
    </div>
    ------

    <!-- ICONO DE WHATSAPP -->
    <aside class="container">
      <div class="whatsapp-container">
        <a href="https://wa.me/543512010010" class="whatsapp-logo" target="_blank">
          <div class="tooltip">¿Necesitás asesoramiento?</div>
          <img src="../bruckerCopia/img/logo/whatsapp-icon-green.png" alt="WhatsApp Logo">
        </a>
      </div>
    </aside>  

    <!--Mision Vision-->
      <section class="container-fluid values-section">      
      
        <div class="container-fluid list-values">
          <h2 class="values-title fs-2" data-aos="zoom-in">NUESTROS VALORES</h2>
          <h6 class="text-principal text-center">Nuestro PROPÓSITO es poner al cliente como protagonista, brindar un servicio diferente, 
            profesional, de excelente calidad y compromiso.
            Somos el PUENTE que conecta al cliente con sus sueños. Una nueva forma de vivir 
            la experiencia inmobiliaria.
          </h6>
          <div class="container text-center">
            <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1">
              <div class="col">
                <img src="../bruckerCopia/img/img-valores/compromiso.png" alt="Logo compromiso">
                <h6 class="text-uppercase" data-aos="flip-right">compromiso</h6>
                <p>Trabajamos con dedicación y esmero para cumplir con las necesidades y 
                  expectativas de nuestros clientes, garantizando un servicio de calidad.
                </p>
              </div>
              <div class="col">
                <img src="../bruckerCopia/img/img-valores/lealtad.png" alt="Logo Lealtad">
                <h6 class="text-uppercase" data-aos="flip-right">lealtad</h6>
                <p>Establecemos relaciones duraderas y de confianza con nuestros clientes, 
                  siendo fieles a nuestros compromisos y valores.</p>
              </div>
              <div class="col">
                <img src="../bruckerCopia/img/img-valores/transparencia.png" alt="Logo Transparencia">
                <h6 class="text-uppercase" data-aos="flip-right">transparencia</h6>
                <p>Actuamos con honestidad y sinceridad en todas nuestras interacciones, 
                  asegurando la claridad en los procesos y la información.</p>
              </div>
              <div class="col">
                <img src="../bruckerCopia/img/img-valores/seguridad.png" alt="Logo seguridad">
                <h6 class="text-uppercase" data-aos="flip-right">seguridad</h6>
                <p>Proporcionamos soluciones confiables y seguras a nuestros clientes, 
                  cuidando su patrimonio y sus intereses.</p>
              </div>
              <div class="col">
                <img src="../bruckerCopia/img/img-valores/confianza.png" alt="Logo confianza">
                <h6 class="text-uppercase" data-aos="flip-right">confianza</h6>
                <p>Fomentamos un ambiente de confianza y respeto, basado en la honestidad, 
                  la integridad y el compromiso con nuestros clientes.</p>
              </div>
              <div class="col">
                <img src="../bruckerCopia/img/img-valores/proactividad.png" alt="Logo proactividad">
                <h6 class="text-uppercase" data-aos="flip-right">proactividad</h6>
                <p>Nos adelantamos a las necesidades de nuestros clientes, ofreciendo 
                  soluciones creativas e innovadoras, y mejorando continuamente nuestros procesos.</p>
              </div>
              <div class="col">
                <img src="../bruckerCopia/img/img-valores/esfuerzo.png" alt="Logo esfuerzo">
                <h6 class="text-uppercase" data-aos="flip-right">esfuerzo</h6>
                <p>Trabajamos con perseverancia y dedicación, buscando siempre superar las 
                  expectativas de nuestros clientes y alcanzar la excelencia en nuestro servicio.</p>
              </div>
              <div class="col">
                <img class="image-logo" data-aos="flip-right" src="../bruckerCopia/img/logo/PNG/sinFondocompleto.png" alt="Logo Brücker">
                <p>Únete a nosotros en la construcción de tus sueños. <strong>¡Descubre cómo Brücker puede ser 
                  tu puente hacia una experiencia inmobiliaria única y satisfactoria!</strong></p>
              </div>
            </div>
          </div>
        </div>    
      </section>
  

    

      <!--Card-->
      <section class="body-card">
        <div class="card">
          <div class="head">
              <div class="circle"> </div>
              <div class="img">
                  <img src="../bruckerCopia/img/img-quienesSomos/damian1.jpeg" alt="Damian Gari">
              </div>
          </div>
    
          <div class="description">
              <h3>Damian Gari</h3>
              <h4>Corredor Inmobiliario – Fundador – CEO DE BRÜCKER. </h4>
              <p>En la actividad desde el año 2019. Comparto mi experiencia y conocimientos adquiridos a lo largo de los años con todas las personas dispuestas a tomar acción en su vida. “Con un objetivo claro, con metas definidas, con esfuerzo extra y la actitud mental adecuada todo es posible”. BRÜCKER es un sueño que comenzó en 2020 y luego de cuatro años, finalmente se volvió realidad. La importancia de reconocer, agradecer y ayudar son los motores que impulsaron su creación. </p>
          </div>

          <div class="contact">
            <a href="https://wa.me/543512010010" target="_blank">Mensaje</a>
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
</body>
</html>