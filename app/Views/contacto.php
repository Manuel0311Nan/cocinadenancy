<div class="container mx-auto p-8">
    <h1 class="text-4xl font-bold text-gray-900 mb-8">Llámanos y confirma tu pedido</h1>
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 ">
    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-8">
        <div class="flex">
            <p>Teléfono para hacer pedidos:<br> <span class="text-red-700 font-bold">674106458</span></p>
        </div>
    </div>
    <div class="overflow-x-auto">
    <table class="min-w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Producto
                </th>
                <th scope="col" class="px-6 py-3">
                    Cantidad
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $total = 0; 
            foreach ($carrito as $index => $item): 
                $subtotal = $item['precio'];
                $total += $subtotal;
            ?>
            <tr class="bg-white border-b hover:bg-gray-100">
                <td class="px-6 py-4 font-medium text-gray-900">
                    <?= esc($item['nombre']) ?>
                </td>
                <td class="px-6 py-4">
                    <?= esc($item['cantidad']) ?>
                </td>
                <td class="px-6 py-4">
                    <?= number_format($subtotal, 2, ',', '.') ?> €
                </td>
                <td class="px-6 py-4">
                    <button 
                        type="button" 
                        class="bg-red-500 hover:bg-red-600 text-white text-xs font-bold py-2 px-4 rounded eliminarProducto"
                        data-index="<?= $index ?>"
                    >
                        Eliminar
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
            <tr class="bg-gray-100">
                <td colspan="2" class="px-6 py-4 text-right font-bold">Total:</td>
                <td colspan="2" class="px-6 py-4 font-bold"><?= number_format($total, 2, ',', '.') ?> €</td>
            </tr>
        </tbody>
    </table>
</div>
    <!-- <form action="<?= base_url('/envioForm') ?>" method="POST">
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

        <div class="mt-8">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Enviar Pedido
            </button>
        </div>
    </form> -->

</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // const verCarritoBtn = document.getElementById('verCarrito');
        // const carritoModal = document.getElementById('carritoModal');
        // const cerrarModalBtn = document.getElementById('cerrarModal');

        // // Abrir el modal
        // verCarritoBtn.addEventListener('click', function() {
        //     carritoModal.classList.remove('hidden');
        // });

        // // Cerrar el modal
        // cerrarModalBtn.addEventListener('click', function() {
        //     carritoModal.classList.add('hidden');
        // });

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