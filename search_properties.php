<?php
// Verificar si se enviaron parámetros de búsqueda
if(isset($_GET['property_types']) && isset($_GET['operation_types'])) {
    // Construir los parámetros de búsqueda
    $search_params = array(
        "current_localization_id" => 0,
        "current_localization_type" => "country",
        "price_from" => 0,
        "price_to" => 999999999,
        "operation_types" => array($_GET['operation_types']), // Obtener el tipo de operación
        "property_types" => array($_GET['property_types']), // Obtener el tipo de propiedad
        "currency" => "ANY",
        "filters" => array()
    );

    // Construir la URL de la API con los parámetros de búsqueda
    $api_url = "https://www.tokkobroker.com/api/v1/property/search/?lang=es_ar&format=json&key=afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3&data=" . urlencode(json_encode($search_params));

    // Realizar la solicitud a la API de Tokko Broker
    $response = file_get_contents($api_url);

    // Procesar la respuesta de la API y mostrar los resultados
    $data = json_decode($response, true);

    if ($data && isset($data['objects'])) {
        foreach ($data['objects'] as $property) {
            echo "<p>ID de Propiedad: " . $property['id'] . "</p>";
            echo "<p>Título de la Publicación: " . $property['publication_title'] . "</p>";
            // Aquí puedes mostrar más detalles de la propiedad según tus necesidades
        }
    } else {
        echo "No se encontraron resultados.";
    }
} else {
    echo "No se han proporcionado parámetros de búsqueda.";
}

