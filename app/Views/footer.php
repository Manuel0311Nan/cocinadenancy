<?php
$url = getenv('app.baseURL');
?>
        <footer class="bg-red-700 text-white font-bold sticky top-[100vh]">
                <img src="<?= base_url()?>public/images/saboresPeru.png" alt="logofooter" width="150px">
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>


        <?php if (isset($archivo_js)): ?>
                <script src="<?= base_url('/public/js/' . $archivo_js) ?>"></script>
                <?php endif; ?>
    </body>
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

</html>