<?php
// Recibir los parámetros de búsqueda desde la URL
$order_by = $_GET['order_by'] ?? 'price';
$limit = $_GET['limit'] ?? 20;
$order = $_GET['order'] ?? 'desc';
$data = json_decode($_GET['data'], true);

// Construir la URL de la API
$api_url = 'http://www.tokkobroker.com/api/v1/property/';
$query_params = [
    'limit' => $limit,
    'lang' => 'es_ar',
    'format' => 'json',
    'key' => 'afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3',
    'order_by' => $order_by,
    'order' => $order,
];

// Agregar parámetros de búsqueda según lo recibido desde el filtro
if (!empty($data['operation_types'])) {
    $query_params['operation_types'] = implode(',', $data['operation_types']);
}

if (!empty($data['property_types'])) {
    $query_params['property_types'] = implode(',', $data['property_types']);
}

if (isset($data['price_from'])) {
    $query_params['price_from'] = $data['price_from'];
}

if (isset($data['price_to'])) {
    $query_params['price_to'] = $data['price_to'];
}

// Construir la URL completa
$url_with_params = $api_url . '?' . http_build_query($query_params);

// Realizar la solicitud a la API
$response = file_get_contents($url_with_params);
$properties = json_decode($response, true);

// Verificar si se obtuvieron datos y si existen propiedades
if ($properties && isset($properties['objects']) && count($properties['objects']) > 0) {
    foreach ($properties['objects'] as $property) {
        // Aquí puedes procesar y mostrar cada propiedad como desees
        echo '<div class="property">';
        echo '<h2>' . $property['property_name'] . '</h2>';
        echo '<p>' . $property['description'] . '</p>';
        // Y así sucesivamente...
        echo '</div>';
    }
} else {
    echo 'No se encontraron propiedades que coincidan con los criterios de búsqueda.';
}
?>
