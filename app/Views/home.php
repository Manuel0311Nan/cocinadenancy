<section class="w-full" >
 <div class="relative h-screen bg-cover bg-center" style="background-image: url('<?= base_url() ?>public/images/contactoMachupichu.jpg');">
    <div class="absolute inset-0 bg-black opacity-20 w-full"></div>
    
    <!-- Contenido de la sección -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-white text-center p-5">
        <h1 class="font-bold mb-4 titleWeb">Sabores de Perú</h1>
        <p class="mb-6 subtitleWeb">Una puerta gastronómica a Perú</p>
    </div>
    </div>
</section>
<section class="w-full relative lg:h-screen flex flex-col sm:flex-row bg-red-700">
    <div class="flex-1 flex flex-col justify-center align-items-center">
        <p class="fontParagraph textDescription text-white p-5">Nuestros dulces están hechos con cariño y pasión y sobre todo mucho <strong>sabor</strong></p>
        <p class="fontParagraph textDescription text-white p-5">Descubre el dulce secreto de la tradición <strong>peruana</strong></p>
        <a href="productos" class="w-fit mx-auto block bg-slate-50 hover:bg-red-600 text-red-700 bg-white-600 hover:text-white sm:text-2xl font-semibold py-2 px-4 rounded-lg">Nuestros dulces</a>
    </div>
    <div class="slider flex-1 md:w-72 text-red-700 p-12 lg:p-auto mx-0 my-auto ">
        <div class="slide-track">
        <?php foreach ($galeria as $dulce): ?>
            <div class="slide p-2 ">
                <img class="w-full object-cover rounded-lg" src="<?=($dulce->Imagen) ?>" alt="<?=($dulce->Nombre) ?>"">
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="w-full fontParagraph" >
    <div class="relative lg:h-screen flex flex-col sm:flex-row">
        <div class="flex-1 md:w-50 hidden lg:block p-12 lg:p-auto lg:mx-0 lg:my-auto bg-white">
            <img src="<?= base_url()?>public/images/saboresPeru.png" alt="logoDescription">
        </div>
        <div class="flex-1 md:w-64 text-red-700 p-12 lg:p-auto mx-0 my-auto bg-white">
            <h5 class="lg:hidden textTitle">Hola, somos <strong class="textTitle">Sabores de Perú</strong></h5> 

            <p class="mb-2 textDescription">La filosofía de la empresa siempre ha sido clara: preservar y compartir el legado de <strong>Nancy Montemayor</strong> con el mundo.</p>
            <p class="my-2 textDescription">Por eso, cada dulce es <strong>Hecho a mano</strong>, utilizando ingredientes locales y sostenibles, manteniendo ese <strong>toque artesanal</strong> que los hace únicos.</p>
            <p class="my-2 textDescription">La empresa sigue creciendo, pero sin perder su esencia. Seguimos explorando nuevos mercados y creando nuevas combinaciones, siempre respetando las <strong>Recetas tradicionales</strong>.</p>
            <p class="sm:mt-10 textoBienvenida">Bienvenidos a nuestra casa</p>
        </div>
    </div>
</section>
<section class="w-full fontParagraph">
    <div class="relative lg:h-screen flex flex-col lg:flex-row">
        
        <div class="flex-1 bg-contain sm:bg-cover bg-center relative imageProductsOne">
            <div class="lg:absolute inset-0 bg-black lg:opacity-40"></div>
            <div class="lg:absolute bottom-0 left-0 w-full p-6 sm:text-white z-10">
                <h5 class="sm:text-3xl font-bold mb-2">Entra y descubre nuestros productos</h5>
                <p class="mb-4 sm:text-2xl">Dulces caseros para ocasiones espciales</p>
                <a href="nosotros" class="bg-slate-50 hover:bg-white-700 text-red-700 lg:bg-red-600 lg:hover:bg-red-700 lg:text-white sm:text-2xl font-semibold py-2 px-4 rounded-lg">Ver Galería</a>
            </div>
        </div>
        <div class="flex-1 bg-contain sm:bg-cover bg-center relative imageProductsTwo">
            <div class="lg:absolute inset-0 bg-black lg:opacity-40"></div>
            <div class="lg:absolute bottom-0 left-0 w-full p-6 sm:text-white z-10">
                <h5 class="sm:text-3xl font-bold mb-2">¿Prefieres enviarnos tu idea?</h5>
                <p class="mb-4 sm:text-2xl">Contáctanos y te responderemos lo antes posible</p>
                <a href="contacto" class="bg-slate-50 hover:bg-white-700 text-red-700 lg:bg-red-600 lg:hover:bg-red-700 lg:text-white sm:text-2xl font-semibold py-2 px-4 rounded-lg">Contacto</a>
            </div>
        </div>
    </div>
</section>

