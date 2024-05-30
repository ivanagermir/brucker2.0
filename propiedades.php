
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

<body >

  <header>

    <nav class=" navbar navbar-expand-lg">
      <div class="col-lg-10 container-fluid">
        <!-- Logo aqui POSICIONADO A LA IZQUIERDA-->
        <a class="navbar-brand" href=".brucker2.0/home.php">
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

  <div class="title-propiedades-pag">
        <div class="row justify-content-center align-items-center">
          <!-- Columna 1 titulo -->
          <div class="col-md-9 order-md-1 text-title">
            <h3>PROPIEDADES</h3>
          </div>
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

      
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">

    <!--Barra de búsqueda-->
<nav class="bg-light">
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load('jquery', '1.7.1');</script>
<script type="text/javascript">google.load('jqueryui', '1.8.13');</script>

<p>Tipo de Operación</p>
<select id="operationType">
  <option value='-1'>Seleccionar Operación</option>
  <option value='1'>Venta</option>
  <option value='2'>Alquiler</option>
  <option value='3'>Alquiler Temporario</option>
</select>




<p>Tipo de Propiedad</p>
<select id="propertyTypes">
  <option value='-1'>Seleccionar Tipo de Operación</option>
  <option value='1' >Terreno</option>
  <option value='2' >Departamento</option>
  <option value='3' >Casa</option>
  <option value='4' >Casa de Fin de Semana</option>
  <option value='5' >Oficina</option>
  <option value='7' >Locales Comerciales</option>
</select>


<input type="button" onclick='doSearch()' value='Buscar' />

<script>
function doSearch(){
  //Init data dictionary with general parameters
  var data = {"current_localization_id":0,"current_localization_type":"country","price_from":0,"price_to":999999999,"operation_types":[1,2,3],"property_types":[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25],"currency":"ANY","filters":[]}

  //Set operation type value
  if( $("#operationType").val() != -1 ){
    data['operation_types'] = [$("#operationType").val()];
  }

  // Set property type value
  if( $("#propertyTypes").val() != -1 ){
    data['property_types'] = [$("#propertyTypes").val()];
  }

  if( $("#minPrice").val() > 0 ){
    data['price_from'] = $("#minPrice").val();
  }

  if( $("#maxPrice").val() > 0 && $("#maxPrice").val() > $("#minPrice").val() ){
    data['price_to'] = $("#maxPrice").val();
  }

  // Send data by GET to properties result page
  window.location='./properties.php?order_by=price&limit=20&order=desc&page=1&data='+JSON.stringify(data);
}

</script>
</nav>


<!--Fin barra de busqueda-->

        <?php
        // Realizar la solicitud a la API de Tokko Broker para obtener los datos de las propiedades
        $url = 'http://www.tokkobroker.com/api/v1/property/?limit=10&offset=0&lang=es_ar&format=json&key=afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        // Verificar si se obtuvieron datos y si existen propiedades
        if ($data && isset($data['objects'])) {
            foreach ($data['objects'] as $property) {
                // Mostrar la tarjeta (card) de la propiedad con la imagen y los detalles
                echo '<div class="col">'; // Inicio de la columna
                echo '<div class="card h-100 d-flex flex-column">'; // Agregamos el inicio de la tarjeta

                // Mostrar la primera imagen de la propiedad
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

                // Mostrar los detalles de la propiedad
                echo '<div class="card-body d-flex flex-column">';
                echo '<h5 class="card-title text-center">' . $property['publication_title'] . '</h5>';
                echo '<div class="property-details text-left flex-grow-1">';
                echo '<p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bed" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#002244" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M22 17v-3h-20" />
                <path d="M2 8v9" />
                <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5z" />
              </svg><strong>  Habitaciones:</strong> ' . $property['room_amount'] . '</p>';
                echo '<p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bath" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#002244" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1z" />
                <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                <path d="M4 21l1 -1.5" />
                <path d="M20 21l-1 -1.5" />
              
              </svg><strong>  Superficie:</strong> ' . $property['surface'] . '</p>';
                echo '</div>';


                // Precio
                echo '<div class="precio-propiedad">';
                foreach ($property['operations'] as $operation) {
                    foreach ($operation['prices'] as $price) {
                        echo '<strong></strong> ' . $price['price'] . ' ' . $price['currency'];
                    }
                }
                echo '</div>';

                // Enlace de ver propiedad
                echo '<div class="btn-container mt-auto">';
                echo '<a href="detallePropiedades.php?id=' . $property['id'] . '" class="btn btn-primary blue-button">Ver Propiedad</a>';
                echo '</div>';

                echo '</div>'; // Cerramos el contenido de la tarjeta
                echo '</div>'; // Cerramos la tarjeta
                echo '</div>'; // Cerramos la columna
            }
        } else {
            echo 'Error al obtener las propiedades.';
        }
        ?>
    </div>
</div>



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
</body>
</html>


 

