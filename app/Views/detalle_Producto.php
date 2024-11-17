        <div class="flex flex-col lg:flex-row h-screen">
            <div class="w-full lg:w-1/2 bg-gray-200 h-1/2 lg:h-full">
            <?php if($producto['imagen'] == ''){?>
                <img class="w-full h-full object-cover" src="https://res.cloudinary.com/de3ujeyub/image/upload/v1731863550/mauro-lima-WjybIjpcf0s-unsplash_jo6byx.jpg" alt="productPorDefecto">
                    <?php }else{?>
                        <img class="w-full h-full object-cover" src="<?= ('https://res.cloudinary.com/de3ujeyub/image/upload/v1731846686/' .$producto['imagen']) ?>.jpg" alt="<?= esc($producto['nombre']) ?>">
                    <?php } ?>
            
            </div>

            <div class="w-full lg:w-1/2 bg-white p-8 overflow-y-auto">
                <h1 class="text-4xl font-bold text-gray-900 mb-8">Opciones de compra</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($opciones_compra as $opcion): ?>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6">
                <?php if (esc($opcion['cantidad']) != null){?>
                    <h3 class="text-xl font-semibold mb-2">Opción <?= esc($opcion['cantidad']) ?> unidades</h3>
                    <p class="text-gray-700 mb-4">Cantidad: <?= esc($opcion['cantidad']) ?> unidades</p>
                    <p class="text-xl text-red-600 font-bold mb-4">Precio: <?= esc($opcion['precio']) ?> €</p>
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg">
                        Añadir al carrito
                    </button>
                </div>
                <?php }else{?>
                    <div>
                    <h3 class="text-xl font-semibold mb-2">Tamaño <?= esc($opcion['tamaño']) ?></h3>
                    <p class="text-xl text-red-600 font-bold mb-4">Precio: <?= esc($opcion['precio']) ?> €</p>
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg">
                        Añadir al carrito
                    </button>
                    </div>
                    <?php } ?>
            <?php endforeach; ?>
            </div>
        </div>
    </div>

