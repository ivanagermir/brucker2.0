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
  <link rel="stylesheet" href="../brucker2.0/css/contacto.css">
  <link rel="stylesheet" href="../brucker2.0/css/style.css">
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
  
  <main>
  <div class="img-fluid portada-contacto">
      <div class="cover-text">
        <h1 class="container display-4">CONTACTO 
        <hr style="border-top: 5px solid #000000; width: 10%; margin: 1rem 0;">
        </h1>
      </div>
    </div>
   
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

    <!-- CONTENIDO PRINCIPAL -->
    <section class="contact-section">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <!-- Columna 1 titulo -->
          <div class="col-md-9 order-md-1 text-title">
            <h3>ASESORAMIENTO</h3>
            <p>
              Nosotros te ayudamos en lo que necesites, si buscas asesoramiento rellená los campos y un 
              representante se va a estar comunicando con vos.
            </p>
          </div>
          <!-- Columna 2 izquierda: Datos -->
          <div class="col-md-4 order-md-2 contact-date mb-5">
            <h4>CONTACTO</h4>
            <!-- Enlace para el correo electrónico -->
            <p class="body-contact">
                <i class="icon fas fa-envelope">
                    <a href="mailto:damian.gariok@gmail.com">
                        <img src="../brucker2.0/img/img-contacto/logoEmail 1.png" alt="logo email">
                    </a>
                </i>
                <a href="mailto:damian.gariok@gmail.com">damian.gariok@gmail.com</a>
            </p>
            <!-- Enlace para el número de teléfono (WhatsApp) -->
            <p class="body-contact">
                <i class="icono fas fa-envelope">
                    <a href="https://wa.me/543512010010">
                        <img src="../brucker2.0/img/img-contacto/logoTelefono 1.png" alt="icono">
                    </a>
                </i>
                <a href="https://wa.me/543512010010">+54 351 201 0010</a>
            </p>
            <img src="../brucker2.0/img/logo/PNG/blanco.png" alt="logo brucker" height="80">
        </div>
        
          <!-- Columna 3 derecha: Formulario -->
          <div class="col-md-6 order-md-3 contact-form">
            <h4>¿CÓMO PODEMOS AYUDARTE?</h4>
            <form action="https://formsubmit.co/damian.gariok@gmail.com" method="POST"> <!-- API para enviar el Formulario al mail formsubmit.co -->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
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
                <label for="disabledSelect" class="col-sm-2 col-form-label">Motivo</label>
                <div class="col-sm-10">
                  <select name="Motivo" id="disabledSelect" class="form-select">
                    <option>Quiero Comprar</option>
                    <option>Quiero Vender</option>
                    <option>Quiero Tasar</option>
                    <option>Quiero Invertir</option>
                    <option>Asesoramiento</option>
                  </select>
                </div>
              </div>
    
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Mensaje</label>
                <div class="col-sm-10">
                  <textarea name="Mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="opcional"></textarea>
                </div>
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn blue-button btn-primary">Enviar</button>
              </div> 
              <!-- input para en envío del Formulario al mail API: formsubmit.co cambiar el value por la pagina en su momento -->
              <input type="hidden" name="_template" value="table">
              <input type="hidden" name="_captcha" value="false">
              <input type="hidden" name="_next" value="http://localhost/brucker2.0/contacto.php">
            </form>  
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
<script src="/app.js"></script>
</body>
</html>