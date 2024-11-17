<div class="container mx-auto p-8">
    <h1 class="text-4xl font-bold text-gray-900 mb-8">Carrito de Compras</h1>

    <?php if (empty($carrito)): ?>
        <p class="text-gray-700">Tu carrito está vacío.</p>
    <?php else: ?>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-700">Producto</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-700">Cantidad</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-gray-700">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carrito as $item): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500"><?= esc($item['nombre']) ?></td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500"><?= esc($item['cantidad']) ?></td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500"><?= esc($item['precio']) ?> €</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
