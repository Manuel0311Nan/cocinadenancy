<div class="container mx-auto p-8">
    <h1 class="text-4xl font-bold text-gray-900 mb-8">Contacto</h1>

    <form action="<?= base_url('/envioForm') ?>" method="POST">
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico:</label>
            <input type="email" name="email" id="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div>
                <button type="button" id="verCarrito" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Ver Pedido
                </button>
            </div>
            <div class="flex">
                <p>Teléfono para hacer pedidos: <span class="text-red-700 font-bold">600000000</span> </p>
            </div>

        </div>
        <div class="mt-8">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Enviar Pedido
            </button>
        </div>
    </form>
</div>

<div id="carritoModal" class="fixed z-1 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-3xl">
            <h2 class="text-2xl font-bold mb-4">Pedido Detallado</h2>

            <?php if (empty($carrito)): ?>
                <p class="text-gray-700">Tu carrito está vacío.</p>
            <?php else: ?>
                <table class="min-w-full bg-white mb-4">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-700">Producto</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-700">Cantidad</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-700">Precio</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-700">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($carrito as $index => $item): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500"><?= esc($item['nombre']) ?></td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500"><?= esc($item['cantidad']) ?></td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500"><?= esc($item['precio']) ?> €</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <button type="button" class="eliminarProducto bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded" data-index="<?= $index ?>">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>

            <button type="button" id="cerrarModal" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Cerrar
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const verCarritoBtn = document.getElementById('verCarrito');
        const carritoModal = document.getElementById('carritoModal');
        const cerrarModalBtn = document.getElementById('cerrarModal');

        // Abrir el modal
        verCarritoBtn.addEventListener('click', function() {
            carritoModal.classList.remove('hidden');
        });

        // Cerrar el modal
        cerrarModalBtn.addEventListener('click', function() {
            carritoModal.classList.add('hidden');
        });

        // Eliminar productos del carrito
        const eliminarBtns = document.querySelectorAll('.eliminarProducto');
        eliminarBtns.forEach(button => {
            button.addEventListener('click', function() {
                const index = button.getAttribute('data-index');
                
                // Realizar una solicitud para eliminar el producto del carrito
                fetch('<?= base_url('carrito/eliminar') ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ index: index })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload(); // Recargar la página para ver los cambios
                    } else {
                        alert('Error al eliminar el producto del carrito.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });
</script>