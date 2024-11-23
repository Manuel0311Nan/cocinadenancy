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


</html>