<section class="py-12 bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Nuestros Productos</h2>
        
        <!-- Grid para la galería de productos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Producto 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col">
                <img class="w-full h-48 object-cover" src="<?= base_url()?>public/images/alfajores.jpg" alt="Producto 1">
                <div class="flex-grow p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Alfajores Peruanos</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Dulces tradicionales rellenos de manjar blanco, una delicia que no te puedes perder. Estos alfajores se elaboran con ingredientes frescos y auténticos.</p>
                    </div>
                    <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg m-auto text-center w-52">Ver más</a>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col">
                <img class="w-full h-48 object-cover" src="<?= base_url()?>public/images/alfajores.jpg" alt="Producto 2">
                <div class="flex-grow p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Turrón de Doña Pepa</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Un dulce colorido y crujiente, típico de las celebraciones peruanas. Perfecto para acompañar cualquier ocasión.</p>
                    </div>
                    <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg m-auto text-center w-52">Ver más</a>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col">
                <img class="w-full h-48 object-cover" src="<?= base_url()?>public/images/alfajores.jpg" alt="Producto 3">
                <div class="flex-grow p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Suspiro a la Limeña</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Un postre suave y dulce, hecho con merengue y manjar. Es uno de los favoritos en Perú y perfecto para los amantes del dulce.</p>
                    </div>
                    <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg m-auto text-center w-52">Ver más</a>
                </div>
            </div>

            <!-- Añadir más productos aquí -->

        </div>
    </div>
</section>
