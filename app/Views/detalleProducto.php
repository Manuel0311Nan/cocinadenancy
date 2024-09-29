<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-96 object-cover" src="<?= base_url('public/images/' . $producto['imagen']) ?>" alt="<?= esc($producto['nombre']) ?>">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4"><?= esc($producto['nombre']) ?></h1>
            <p class="text-gray-700 mb-4"><?= esc($producto['descripcion']) ?></p>
            <p class="text-xl font-semibold text-red-600">Precio: <?= esc($producto['precio']) ?> €</p>
        </div>
    </div>
</div>