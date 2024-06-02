<?php
// Función para realizar la solicitud a la API de Tokko Broker
function requestTokkoAPI($url) {
    // Inicializar cURL
    $ch = curl_init($url);
    
    // Configurar opciones de cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    
    // Realizar la solicitud
    $response = curl_exec($ch);
    
    // Verificar errores
    if ($response === FALSE) {
        throw new Exception('Error al hacer la solicitud a la API: ' . curl_error($ch));
    }
    
    // Obtener el código de estado HTTP
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode != 200) {
        throw new Exception('Error al hacer la solicitud a la API. Código de estado HTTP: ' . $httpCode);
    }
    
    // Cerrar cURL
    curl_close($ch);
    
    // Decodificar la respuesta JSON
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Error al decodificar la respuesta JSON.');
    }
    
    return $data;
}

// Función para construir la URL de la API
function buildAPIUrl($baseUrl, $searchParams) {
    // Construir la URL completa con todos los parámetros
    $url = $baseUrl . '?' . http_build_query(['data' => json_encode($searchParams)]);
    return $url;
}

// Función para procesar los resultados de la API
function processAPIResponse($data) {
    if (isset($data['objects']) && is_array($data['objects'])) {
        echo '<ul>';
        foreach ($data['objects'] as $property) {
            echo '<li>';
            echo '<strong>Título:</strong> ' . $property['publication_title'] . '<br>';
            echo '<strong>Dormitorios:</strong> ' . $property['suite_amount'] . '<br>';
            echo '<strong>Superficie:</strong> ' . $property['surface'] . ' m²<br>';
            echo '<strong>Precio:</strong> ' . $property['operations'][0]['prices'][0]['price'] . ' ' . $property['operations'][0]['prices'][0]['currency'];
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No se encontraron propiedades.';
    }
}

// Construir los parámetros de búsqueda específicos
$searchParams = [
    'current_localization_id' => 0,
    'current_localization_type' => 'country',
    'price_from' => 1,
    'price_to' => 1000000,
    'currency' => 'ANY',
    'filters' => []
];

// Construir la URL base de la API
$baseUrl = 'http://www.tokkobroker.com/api/v1/property/?limit=20&offset=0&lang=es_ar&format=json&key=afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3';


// Construir la URL completa de la API
$url = buildAPIUrl($baseUrl, $searchParams);

try {
    // Realizar la solicitud a la API
    $data = requestTokkoAPI($url);
    
    // Procesar los resultados
    processAPIResponse($data);
} catch (Exception $e) {
    // Manejar errores
    echo 'Error: ' . $e->getMessage();
}
