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
    <link rel="stylesheet" href="../brucker2.0/css/style.css">
    <link rel="stylesheet" href="../brucker2.0/css/quienesSomos.css">
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
  
  <!--Portada-->
  <main>
  <style>
    p {
      font-size: 16px;
    }
    </style>

    <div class="img-fluid portada-quienesSomos">
        <div class="container cover-text">
        <h1 class="display-4">QUIENES SOMOS</h1>
        <hr style="border-top: 5px solid #000000; width: 10%; margin: 1rem 0;">
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

    <!--Valores-->
      <section class="values-section">      
        <div class="container-fluid list-values">
          <h2 class="values-title fs-2" data-aos="zoom-in">NUESTROS VALORES <hr></h2>
          <div class="container text-center">
          <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1">
            <div class="col">
              <img src="../brucker2.0/img/img-valores/compromiso.png" alt="Logo compromiso">
              <h6 class="text-uppercase" data-aos="flip-right">compromiso</h6>
              <p>Trabajamos con dedicación y esmero para cumplir con las necesidades y
                expectativas de nuestros clientes, garantizando un servicio de calidad.
              </p>
            </div>
            <div class="col">
              <img src="../brucker2.0/img/img-valores/lealtad.png" alt="Logo Lealtad">
              <h6 class="text-uppercase" data-aos="flip-right">lealtad</h6>
              <p>Establecemos relaciones duraderas y de confianza,
                siendo fieles a nuestros compromisos y valores.</p>
            </div>
            <div class="col">
              <img src="../brucker2.0/img/img-valores/transparencia.png" alt="Logo Transparencia">
              <h6 class="text-uppercase" data-aos="flip-right">transparencia</h6>
              <p>Actuamos con honestidad y sinceridad en todas nuestras interacciones,
                asegurando la claridad en los procesos y la información.</p>
            </div>
            <div class="col">
              <img src="../brucker2.0/img/img-valores/seguridad.png" alt="Logo seguridad">
              <h6 class="text-uppercase" data-aos="flip-right">seguridad</h6>
              <p>Proporcionamos soluciones confiables y seguras a quienes confian en nosotros,
                cuidando su patrimonio y sus intereses.</p>
            </div>
            <div class="col">
              <img src="../brucker2.0/img/img-valores/confianza.png" alt="Logo confianza">
              <h6 class="text-uppercase" data-aos="flip-right">confianza</h6>
              <p>Fomentamos un ambiente de confianza y respeto, basado en la honestidad,
                la integridad y el compromiso.</p>
            </div>
            <div class="col">
              <img src="../brucker2.0/img/img-valores/proactividad.png" alt="Logo proactividad">
              <h6 class="text-uppercase" data-aos="flip-right">proactividad</h6>
              <p>Nos adelantamos a las necesidades de nuestros clientes, ofreciendo
                soluciones creativas e innovadoras, y mejorando continuamente nuestros procesos.</p>
            </div>
            <div class="col">
              <img src="../brucker2.0/img/img-valores/esfuerzo.png" alt="Logo esfuerzo">
              <h6 class="text-uppercase" data-aos="flip-right">esfuerzo</h6>
              <p>Trabajamos con perseverancia y dedicación, buscando siempre superar las
                expectativas de quienes confían en nosotros y alcanzar la excelencia en nuestro servicio.</p>
            </div>
            <div class="col">
              <img class="image-logo" data-aos="flip-right" src="../brucker2.0/img/logo/PNG/sinFondocompleto.png" alt="Logo Brücker">
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
                  <img src="../brucker2.0/img/img-quienesSomos/damian1.jpeg" alt="Damian Gari">
              </div>
          </div>
    
          <div class="description">
              <h3>Damian Gari</h3>
              <h4>Corredor Inmobiliario – Fundador – CEO de BRÜCKER. </h4>
              <p>En la actividad desde el año 2019. Comparto mi experiencia y conocimientos adquiridos a lo largo de los años con todas las personas dispuestas a tomar acción en su vida. “Con un objetivo claro, con metas definidas, con esfuerzo extra y la actitud mental adecuada todo es posible”. BRÜCKER es un sueño que comenzó en 2020 y luego de cuatro años, finalmente se volvió realidad. La importancia de reconocer, agradecer y ayudar son los motores que impulsaron su creación. </p>
          </div>

          <div class="contact">
            <a href="https://wa.me/543512010010" target="_blank">Mensaje</a>
          </div>
        </div>
      </section>

      <!-- Mision y Vision-->
      <section class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title text-center text-primary"><strong>MISIÓN</strong></h2>
                <hr> 
                <p class="card-text">
                "En BRÜCKER, nos enfocamos en brindar soluciones inmobiliarias con un servicio diferencial y 
                centrado en el cliente. Nuestra misión es ayudar a nuestros clientes a conseguir sus metas y 
                objetivos inmobiliarios, poniendo a su disposición toda nuestra formación, experiencia, los mejores 
                medios y las técnicas más avanzadas en el mercado inmobiliario.
                </p>
                <p class="card-text">
                Nos comprometemos a actuar con profesionalismo, transparencia, seguridad y confianza en cada una de 
                nuestras operaciones. A través de nuestro trabajo, buscamos contribuir al desarrollo y crecimiento de 
                la comunidad y del sector inmobiliario, de manera sostenible y responsable.”
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title text-center text-primary"><strong>VISIÓN</strong></h2>
                <hr>
                <p class="card-text">" Somos el puente entre nuestros clientes y sus metas y objetivos inmobiliarios. Nos comprometemos 
                a proporcionar una experiencia personalizada y sin contratiempos, donde cada paso del proceso 
                inmobiliario se realiza con cuidado y atención a los detalles.
                </p>
                <p class="card-text">
                Nuestro enfoque se base en comprender las necesidades únicas de cada cliente y en encontrar soluciones 
                a medida que no solo cumplan, sino que superen sus expectativas.
                </p>
                <p class="card-text">
                Nos basamos en las últimas técnicas de marketing y negociación, colaborando con la mayor cantidad de 
                Agentes de la zona.
                </p>
                <p class="card-text">
                Estamos comprometidos con la excelencia en todo lo que hacemos, y cada día trabajamos con pasión y 
                dedicación para construir un futuro donde cada cliente pueda alcanzar sus sueños inmobiliarios con 
                confianza y tranquilidad."
                </p>
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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      AOS.init();
    });
    AOS.init({
      duration: 1500,
      once: false
    });</script>
</body>
</html>