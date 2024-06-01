<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $property_type = isset($_GET['property_type']) ? $_GET['property_type'] : '';
    $operation_type = isset($_GET['operation_type']) ? $_GET['operation_type'] : '';

    // Construir la URL de la API con los parámetros recibidos
    $url = 'http://www.tokkobroker.com/api/v1/property/?limit=10&offset=0&lang=es_ar&format=json&key=afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3';
    $url .= '&property_type=' . urlencode($property_type);
    $url .= '&operation_type=' . urlencode($operation_type);

    // Realizar la solicitud a la API
    $response = file_get_contents($url);
    if ($response === FALSE) {
        die('Error al hacer la solicitud a la API.');
    }

    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error al decodificar la respuesta JSON.');
    }

    // Procesar y mostrar los datos
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
        echo 'No se encontraron propiedades.';
    }
}
?>
