<section class="min-h-32 ">
<h2 class="text-center text-3xl font-bold text-gray-900 mt-3">Contáctanos</h2>
<div class="my-5 flex flex-col sm:flex-row items-center ">
    <article class="w-full sm:w-1/2 mb-5 sm:mb-0 sm:mt-5 sm:mr-5">
        <img class="w-full h-auto rounded-lg object-cover" src="<?= base_url()?>public/images/ventanaMachupichu.jpg" alt="contacto">
    </article>

    <article class="w-full sm:w-1/2">
        <form action="<?= base_url()?>/#" class="space-y-5">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu email</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required />
            </div>

            <div>
                <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Teléfono" required />
            </div>

            <div>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tu mensaje..."></textarea>
            </div>

            <button class="w-full bg-red-700 text-white font-bold p-3 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">Enviar mensaje</button>
        </form>
    </article>
    </div>
</section>
