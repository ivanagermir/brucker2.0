<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjetas de Propiedades</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f8f8f8;
}

.container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    position: relative;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    transition: transform 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-10px);
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.overlay {
    position: absolute; 
    bottom: 95px;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-around;
    
}

.icon-text {
    display: flex;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 5px 23px;
    
    color: white;
}

.icon-text img {
    width: 20px;
    height: 20px;
    margin-right: 5px;
}

.card-content {
    padding: 10px 15px; /* Reducir el padding superior */
}

.card-content h3 {
    margin-bottom: 10px;
    font-size: 20px;
    color: #333;
    text-align: center;
}

.card-content hr {
    border: none;
    border-top: 1px solid #ddd;
    margin: 10px 0;
}

.card-content p {
    margin-bottom: 10px;
    color: #777;
    text-align: center;
}

.card-content button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
}

.card-content button:hover {
    background-color: #0056b3;
}

</style>
<body>
    <div class="container">
        <div class="card">
            <img src="https://via.placeholder.com/300x200" alt="Imagen de Propiedad">
            <div class="overlay">
                <div class="icon-text">
                    <img src="icono_habitaciones.png" alt="Habitaciones">
                    <span>3 Habitaciones</span>
                </div>
                <div class="icon-text">
                    <img src="icono_superficie.png" alt="Superficie">
                    <span>120 m²</span>
                </div>
            </div>
            <div class="card-content">
                <h3>Propiedad en Venta</h3>
                <hr>
                <p>Precio: $200,000</p>
            </div>
        </div>
        <!-- Puedes duplicar la tarjeta para crear más -->
    </div>
</body>
</html>
