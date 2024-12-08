        <div class="flex flex-col xl:flex-row h-screen">
            <div class="w-full xl:w-1/2 bg-gray-200 h-1/2 xl:h-full">
                <?php if ($producto['imagen'] == '') { ?>
                    <img class="w-full h-full object-cover" src="https://res.cloudinary.com/de3ujeyub/image/upload/v1731863550/mauro-lima-WjybIjpcf0s-unsplash_jo6byx.jpg" alt="productPorDefecto">
                <?php } else { ?>
                    <img class="w-full h-full object-cover" src="<?= ('https://res.cloudinary.com/de3ujeyub/image/upload/v1731846686/' . $producto['imagen']) ?>.jpg" alt="<?= esc($producto['nombre']) ?>">
                <?php } ?>

            </div>
            <div class="w-full xl:w-1/2 bg-white p-8 overflow-y-auto">
                <h1 class="text-4xl font-bold text-gray-900 mb-8">Opciones de compra</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-2 gap-8">
                    <?php foreach ($opciones_compra as $opcion): ?>
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6">
                            <?php if (esc($opcion['cantidad']) != null): ?>
                                <h3 class="text-xl font-semibold mb-2">Opción <?= esc($opcion['cantidad']) ?> unidades</h3>
                                <p class="text-gray-700 mb-4">Cantidad: <?= esc($opcion['cantidad']) ?> unidades</p>
                                <p class="text-xl text-red-600 font-bold mb-4">Precio: <?= esc($opcion['precio']) ?> €</p>
                                <button class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg agregar-carrito"
                                    data-id="<?= esc($opcion['id']) ?>" data-cantidad="<?= esc($opcion['cantidad']) ?>">
                                    Añadir al carrito
                                </button>
                            <?php else: ?>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Tamaño <?= esc($opcion['tamaño']) ?></h3>
                                    <p class="text-xl text-red-600 font-bold mb-4">Precio: <?= esc($opcion['precio']) ?> €</p>
                                    <button class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg agregar-carrito"
                                        data-id="<?= esc($opcion['id']) ?>" data-cantidad="1">
                                        Añadir al carrito
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>

                </div>
                <div>
                <button class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg">
                    <a href="<?= base_url('productos') ?>"> Volver a productos</a>
                </button>
            </div>
            </div>

        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const botonesAgregar = document.querySelectorAll('.agregar-carrito');

                botonesAgregar.forEach(button => {
                    button.addEventListener('click', function() {
                        const idProducto = this.getAttribute('data-id');
                        const cantidad = this.getAttribute('data-cantidad');
                        console.log('Datos enviados:', {
                            idProducto,
                            cantidad
                        });

                        fetch('<?= base_url('/carrito/agregar') ?>', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    id: idProducto,
                                    cantidad: cantidad
                                })

                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    alert('Producto añadido al carrito');
                                } else {
                                    console.error('Error:', data.error);
                                    alert('Error al añadir el producto al carrito');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Error al añadir el producto al carrito desde abajo');
                            });
                    });
                });
            });
        </script>