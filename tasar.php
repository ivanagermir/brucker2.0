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
    <link rel="stylesheet" href="../bruckerCopia/css/style.css">
    <link rel="stylesheet" href="../bruckerCopia/css/tasar.css">
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
    <div class="img-fluid portada-tasar">
      <div class="container cover-text">
        <h1 class="display-4">QUIERO TASAR</h1>
          <hr style="border-top: 5px solid #000000; width: 10%; margin: 1rem 0;">
      </div>
    </div>

    <!-- ICONO DE WHATSAPP -->
    <aside class="container">
      <div class="whatsapp-container">
        <a href="https://wa.me/543512010010" class="whatsapp-logo" target="_blank">
          <div class="tooltip">¿Necesitás asesoramiento?</div>
          <img src="../bruckerCopia/img/logo/whatsapp-icon-green.png" alt="WhatsApp Logo">
        </a>
      </div>
    </aside>  

    </main>  


    <!-- Contenido principal de la página -->
    <section>
      <div class="container">
        <h3 class="title-tasar">¿Querés <strong>TASAR</strong> una propiedad?</h3>
        <hr>
        <p>Conocer el valor de venta o alquiler es esencial para cualquier operación 
          inmobiliaria. Estamos a tu disposición para ayudarte en la venta, compra o alquiler de una propiedad.</p>
        <h3 class="subtitle-tasar">¿Cuánto puedo pedir por mi propiedad?</h3>
        <hr>
        <p>
          Arribar al valor de tasación de un inmueble es tarea profesional. Si bien uno como propietario se va 
          haciendo idea de cuánto puede costar, son muchas las variables que hay que tener en cuenta al valuar 
          una propiedad.
        </p>
        <p>
          El potencial de cada vivienda depende de su localización, entorno y la demanda del momento; 
          parámetros que cada tasación tiene en cuenta con precisión, para determinar el valor comercial de 
          cada una. Nuestra experiencia en tasación de inmuebles, te ayuda a tener la información precisa sobre 
          el valor de mercado actualizado, problemáticas y valores técnicos.
        </p>
      </div>
    </section>

    <section>
      <div class="container" style="justify-content: center;">
        <img src="../bruckerCopia/img/img-tasar/imagen-tasar.png" alt="Pirámide de tasación">
      </div>
    </section>

    <!-- Formulario para pedir tasación -->
    <section>
      <div class="container">
        <div class="form">
          <form action="https://formsubmit.co/fenixcode.cba@gmail.com" method="POST"> <!-- API para enviar el Formulario al mail formsubmit.co -->
            <div class="row mb-3">
              <h4>SOLICITAR TASACIÓN</h4>
              <label for="inputText" class="col-sm-2 col-form-label">Nombre y apellido</label>
              <div class="col-sm-10">
                <input type="text" name="Nombre" class="form-control" id="inputText">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Teléfono</label>
              <div class="col-sm-10">
                <input type="text" name="Teléfono" class="form-control" id="text">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Deja tu mensaje</label>
              <div class="col-sm-10">
                <textarea name="Mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="submit" class="btn light-button btn-primary">Enviar</button>
            </div>
             <!-- input para en envío del Formulario al mail API: formsubmit.co cambiar el value por la pagina en su momento -->
             <input type="hidden" name="_template" value="table">
             <input type="hidden" name="_captcha" value="false">
             <input type="hidden" name="_next" value="http://127.0.0.1:5501/html/tasar.html">      
          </form>         
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