<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sabores de Perú</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url()?>/public/css/styles.css" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

</head>
<body class="h-screen w-full">

<header class="bg-red-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="<?= base_url()?>" class="flex items-center space-x-3 rtl:space-x-reverse">
    <img src="<?= base_url()?>public/images/saboresPeru.png" alt="logo" width="200px">
  </a>
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-white dark:hover:bg-white-800 dark:hover:text-red-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-red-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-red-700 md:dark:bg-red-700">
      <li>
        <a href="<?= base_url()?>" class="block my-2 p-3 rounded-md transition-all text-white hover:bg-slate-100 hover:text-red-700 font-bold" aria-current="page">Home</a>
      </li> 
      <li>
        <a href="#" class="block my-2 p-3 rounded-md transition-all text-white hover:bg-slate-100 hover:text-red-700 font-bold">Sobre nosotros</a>
      </li>
      <li>
        <a href="productos" class="block my-2 p-3 rounded-md transition-all text-white hover:bg-slate-100 hover:text-red-700 font-bold">Productos</a>
      </li>
      <li>
        <a href="contacto" class="block my-2 p-3 rounded-md transition-all text-white hover:bg-slate-100 hover:text-red-700 font-bold">Contacto</a>
      </li>
    </ul>
  </div>
  </div>

</header>