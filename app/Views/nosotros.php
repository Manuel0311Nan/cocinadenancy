<section class="m-5">
<h2 class="text-3xl text-red-700 font-bold text-center mb-8 fontParagraph">Trabajos terminados</h2>
<div class="fontParagraph">
    <div></div>
    <p class="textDescription text-red-700 lg:p-auto mx-0 my-auto text-center">Ofrecemos personalización completa de las tartas, tanto de color como de forma</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 xl:grid-cols-3">
    <?php foreach ($galeria as $dulce): ?>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 md:m-1">
        <img class="w-full object-cover" src="<?=($dulce->Imagen) ?>" alt="<?=($dulce->Nombre) ?>"">
        </div>
    <?php endforeach; ?>
</div>
</section>