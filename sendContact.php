<?php

// Datos de contacto
$data = array(
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'phone' => '123456789',
    'cellphone' => '987654321',
    'work_name' => 'Acme Corporation',
    'text' => 'Mensaje de prueba',
    'properties' => '[1,2,546]', // Lista de propiedades relacionadas
    'tags' => '["AdSense","Inversor"]', // Lista de etiquetas relacionadas
    'agent_mail' => 'agent@example.com' // Correo electrónico del agente
);

// Convertir datos a JSON
$jsonData = json_encode($data);

// Configurar la solicitud HTTP POST
$url = '/api/v1/webcontact/';
$apiKey = 'afc6818db3d1bc5b3ae1e77169f5cb2aae4542f3'; // Reemplaza 'tu_api_key' con tu clave de API
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey // Agrega la clave de API como encabezado de autorización
);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Realizar la solicitud HTTP
$response = curl_exec($curl);

// Verificar si hay errores
if (curl_errno($curl)) {
    $error = curl_error($curl);
    // Manejar el error
    echo "Error: $error";
} else {
    // Procesar la respuesta
    echo "Respuesta: $response";
}

// Cerrar la sesión cURL
curl_close($curl);

?>
