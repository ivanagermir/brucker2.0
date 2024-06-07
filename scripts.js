document.addEventListener('DOMContentLoaded', function() {
    // Tu código existente aquí
    const form = document.getElementById('dataForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe normalmente

        const formData = new FormData(form); // Obtener los datos del formulario

        fetch('save_data.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            // Actualizar la tabla después de guardar los datos
            form.reset();
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        fetch('fetch_data.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                const tableBody = document.querySelector('#dataTable tbody');
                tableBody.innerHTML = ""; // Limpia la tabla antes de agregar nuevos datos
                data.forEach(row => {
                    const tr = document.createElement('tr');
    
                    tr.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.title}</td>
                        <td>${row.content}</td>
                        <td>
                            <button class="edit" data-id="${row.id}">Editar</button>
                            <button class="delete" data-id="${row.id}">Eliminar</button>
                        </td>
                    `;
    
                    tableBody.appendChild(tr);
                });
    
                document.querySelectorAll('.edit').forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.dataset.id;
                        const title = prompt("Nuevo título:");
                        const content = prompt("Nuevo contenido:");

                        const formData = new FormData();
                        formData.append('id', id);
                        formData.append('title', title);
                        formData.append('content', content);

                        fetch('edit_data.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.text())
                        .then(data => {
                            console.log(data);
                            // Actualizar la tabla después de editar
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                    });
                });

                document.querySelectorAll('.delete').forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.dataset.id;

                        const formData = new FormData();
                        formData.append('id', id);

                        fetch('delete_data.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.text())
                        .then(data => {
                            console.log(data);
                            // Eliminar la fila de la tabla después de eliminar
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                    });
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
    
});
