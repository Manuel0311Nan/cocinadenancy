<?php
$url = getenv('app.baseURL');
?>
        <footer class="bg-red-700 text-white font-bold sticky top-[100vh]">
                <img src="<?= base_url()?>public/images/saboresPeru.png" alt="logofooter" width="150px">
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

<script>

document.addEventListener("DOMContentLoaded", function() {
                const carritoCantidad = document.getElementById('carritoCantidad');

                function actualizarCantidadCarrito() {
                fetch('<?= base_url('/carrito/cantidad') ?>')
                        .then(response => response.json())
                        .then(data => {
                        carritoCantidad.textContent = data.cantidad || 0; // Actualiza la cantidad en el header
                        })
                        .catch(error => console.error('Error al actualizar la cantidad del carrito:', error));
                }
                actualizarCantidadCarrito();
            });
</script>
    </body>

</html>