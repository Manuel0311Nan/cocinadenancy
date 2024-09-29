<section class="py-12 bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Nuestros Productos</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($productos as $producto): ?>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col">
                <img class="w-full h-48 object-cover" src="<?= base_url('public/images/' . $producto->imagen) ?>.jpg" alt="<?= esc($producto->slug) ?>">
                <div class="flex-grow p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-semibold mb-2"><?= esc($producto->nombre) ?></h3>
                        <p class="text-gray-600 mb-4 line-clamp-3"><?= esc($producto->descripcion) ?></p>
                    </div>
                    <a href="<?= base_url('producto/' . $producto->id) ?>" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg mt-auto">Ver más</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>