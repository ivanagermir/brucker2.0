<?php
//base de datos
require '../../includes/config/database.php';




require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="container contenedor seccion ">
        <h1>Crear</h1>

        <a href="/brucker2.0/admin/novedades/index.php" class="boton-verde">Volver</a>

        <form class="formulario">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Título</label>
                <input type="text" id="titulo" placeholder="Título de la noticia">

                
                <label for="subtitulo">Subtitulo</label>
                <input type="text" id="subtitulo" placeholder="Subtítulo de la noticia">

                <label for="imagen1">Imagen 1</label>
                <input type="file" id="imagen1" accept="image/jpeg, image/png">

                <label for="descripcion1">Párrafo 1</label>
                <textarea id="descripcion1"></textarea>

                
                <label for="imagen2">Imagen 2</label>
                <input type="file" id="imagen2" accept="image/jpeg, image/png">

                <label for="descripcion2">Párrafo 2</label>
                <textarea id="descripcion2"></textarea>

            </fieldset>


            <input type="submit" value="Crear Propiedad" class="boton-verde">
        </form>
    </main>
</body>
</html>