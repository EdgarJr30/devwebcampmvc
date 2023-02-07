<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia mas importante de Latinoamerica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animation(); ?> class="devebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p <?php aos_animation(); ?> class="devwebcamp__texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse odit autem amet cum accusantium aut sunt distinctio doloremque ipsam a quidem fugit eveniet ipsa blanditiis quas reprehenderit animi, repellat ducimus.</p>

            <p <?php aos_animation(); ?> class="devwebcamp__texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse odit autem amet cum accusantium aut sunt distinctio doloremque ipsam a quidem fugit eveniet ipsa blanditiis quas reprehenderit animi, repellat ducimus.</p>
        </div>
    </div>
</main>