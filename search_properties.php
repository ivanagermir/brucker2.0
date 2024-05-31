<?php

// Verificar si se recibieron los parámetros de búsqueda
if(isset($_GET['property_type']) && isset($_GET['operation_type'])) {
    // Obtener los valores de los parámetros de búsqueda
    $propertyType = $_GET['property_type'];
    $operationType = $_GET['operation_type'];

    // Configuración de la solicitud HTTP GET
    $baseUrl = 'https://www.tokkobroker.com/api/v1/property/search';
    $queryParams = array(
        'lang' => 'es_ar',
        'format' => 'json',
        'limit' => 20,
        'order_by' => 'random',
        'order' => 'DESC',
        'property_type' => $propertyType,
        'operation_type' => $operationType,
        'key' => 'afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3', // Reemplaza 'Api Clave' con tu clave real de la API
        // Agrega cualquier otro parámetro necesario para la búsqueda
    );
    $fullUrl = $baseUrl . '?' . http_build_query($queryParams);

    // Realizar la solicitud HTTP GET
    $curl = curl_init($fullUrl);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Desactiva la verificación SSL (solo para pruebas)
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); // Seguir redirecciones
    $response = curl_exec($curl);

    // Verificar si hay errores
    if (curl_errno($curl)) {
        $error = curl_error($curl);
        // Manejar el error
        echo "Error cURL: $error";
    } else {
        // Verificar el código de estado HTTP
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($httpCode >= 200 && $httpCode < 300) {
            // Procesar la respuesta JSON
            $responseData = json_decode($response, true);
            if ($responseData !== null) {
                // La respuesta se recibió correctamente, puedes procesarla aquí
                // Por ejemplo, puedes mostrar los resultados de la búsqueda
                echo "Resultados de la búsqueda:<br>";
                foreach ($responseData as $property) {
                    echo "<p>Propiedad ID: " . $property['id'] . "</p>";
                    echo "<p>Título: " . $property['publication_title'] . "</p>";
                    // Muestra otros datos relevantes de la propiedad según sea necesario
                }
            } else {
                // La respuesta no se pudo decodificar como JSON
                echo "Error JSON: La respuesta de la API no es válida";
            }
        } else {
            // Error de estado HTTP
            echo "Error HTTP: Código $httpCode";
        }
    }

    // Cerrar la sesión cURL
    curl_close($curl);
} else {
    // Mostrar un mensaje si no se proporcionaron los parámetros de búsqueda
    echo "Ingrese el tipo de propiedad y tipo de operación";
}
?>


