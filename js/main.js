// Clave API proporcionada por Tokko Broker
const API_KEY = '5940ea45eb7cfb55228bec0b958ea9c0be151757';

// URL de la API de Tokko Broker para obtener propiedades
const API_URL = 'https://api.tokkobroker.com/v1/properties/';

// Función para obtener propiedades de Tokko Broker
async function obtenerPropiedades() {
  try {
    const response = await fetch(API_URL, {
      headers: {
        'Authorization': `Bearer ${API_KEY}`
      }
    });

    if (!response.ok) {
      throw new Error('No se pudieron obtener las propiedades');
    }

    const data = await response.json();
    return data.results;
  } catch (error) {
    console.error('Error al obtener propiedades:', error);
    return [];
  }
}

// Función para mostrar las propiedades en la página
async function mostrarPropiedades() {
  const propiedadesContainer = document.getElementById('propiedades-container');

  const propiedades = await obtenerPropiedades();

  propiedades.forEach(propiedad => {
    const propiedadCard = document.createElement('div');
    propiedadCard.classList.add('col-md-4', 'mb-4');

    propiedadCard.innerHTML = `
      <div class="card">
        <img src="${propiedad.main_image}" class="card-img-top" alt="${propiedad.title}">
        <div class="card-body">
          <h5 class="card-title">${propiedad.title}</h5>
          <p class="card-text">Precio: ${propiedad.price}</p>
          <p class="card-text">Dirección: ${propiedad.address}</p>
          <!-- Aquí puedes agregar más información de la propiedad según tus necesidades -->
        </div>
      </div>
    `;

    propiedadesContainer.appendChild(propiedadCard);
  });
}

// Mostrar propiedades al cargar la página
mostrarPropiedades();
