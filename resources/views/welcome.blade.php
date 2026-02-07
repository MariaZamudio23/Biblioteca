<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca</title>
        <!-- {{ config('app.name', 'Laravel') }} -->
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
           <style>

        /* Estilos para asegurar que el contenido del hero ocupe el espacio completo restante */

        .hero-section {

            min-height: calc(100vh - 64px); /* Altura de la vista menos la altura del header */

            display: flex;

            align-items: center; /* Centra el contenido verticalmente */

            justify-content: center; /* Centra el contenido horizontalmente */

            background-size: cover;

            background-position: center;

        }

        @media (min-width: 768px) { /* Ajuste para desktop si el header cambia de altura */

            .hero-section {

                min-height: calc(100vh - 80px); /* Ajusta si el header es más alto en desktop */

            }

        }
</style>
        @endif
    </head>
    <body class="bg-gray-50 font-sans leading-normal tracking-normal">
 
    <header class="bg-blue-800 text-white shadow-lg fixed w-full z-50">
<div class="container mx-auto flex items-center justify-between px-6 py-4 md:py-5">
<div class="flex items-center">
<a href="#" class="text-2xl font-bold uppercase tracking-wider">BiblioTech</a>
</div>
<nav class="hidden md:flex space-x-8">
<a href="#" class="hover:text-blue-200 transition">Inicio</a>
<a href="/login" class="hover:text-blue-200 transition">Login</a>
</nav>
 
            <button id="mobile-menu-button" class="md:hidden focus:outline-none">
<i class="fas fa-bars text-2xl"></i>
</button>
</div>
 
        <nav id="mobile-menu" class="hidden md:hidden bg-blue-700 pb-4">
<a href="#" class="block px-6 py-3 text-white hover:bg-blue-600 transition">Inicio</a>
<a href="/login" class="block px-6 py-3 text-white hover:bg-blue-600 transition">Login</a>
</nav>
</header>
 
    <section class="hero-section text-white relative" style="background-image: url('https://images.unsplash.com/photo-1521587765099-efb68d6481bb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80%27);%22>
<div class="absolute inset-0 bg-black opacity-60"></div>
<div class="container mx-auto text-center relative z-10 px-6 py-20">
<h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 animate-fade-in-down">

                Descubre un Mundo de Conocimiento
</h1>
<p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto animate-fade-in-up">

                Explora nuestra vasta colección de libros, documentos y recursos digitales.
</p>
<a href="/login" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105 animate-bounce-in">

                Comienza a Explorar
</a>
</div>
</section>
 
    <section class="bg-white py-16 px-6">
<div class="container mx-auto text-center">
<h2 class="text-3xl font-bold text-gray-800 mb-8">Nuestros Servicios</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="p-6 bg-gray-100 rounded-lg shadow-md">
<i class="fas fa-search text-4xl text-blue-600 mb-4"></i>
<h3 class="text-xl font-semibold mb-2">Búsqueda Avanzada</h3>
<p class="text-gray-600">Encuentra exactamente lo que necesitas con nuestros filtros potentes.</p>
</div>
<div class="p-6 bg-gray-100 rounded-lg shadow-md">
<i class="fas fa-book-reader text-4xl text-blue-600 mb-4"></i>
<h3 class="text-xl font-semibold mb-2">Lectura en Línea</h3>
<p class="text-gray-600">Accede a tus libros favoritos desde cualquier dispositivo.</p>
</div>
<div class="p-6 bg-gray-100 rounded-lg shadow-md">
<i class="fas fa-users text-4xl text-blue-600 mb-4"></i>
<h3 class="text-xl font-semibold mb-2">Comunidad</h3>
<p class="text-gray-600">Únete a clubes de lectura y comparte tus pasiones.</p>
</div>
</div>
</div>
</section>
 
    <section class="bg-gray-100 py-16 px-6">
<div class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-10">
<div class="md:w-1/2">
<img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80%22 alt="Estanterías de libros" class="rounded-lg shadow-lg w-full h-auto object-cover">
</div>
<div class="md:w-1/2 text-center md:text-left">
<h2 class="text-3xl font-bold text-gray-800 mb-6">Un Espacio para Todos</h2>
<p class="text-gray-700 text-lg leading-relaxed mb-6">

                    Nuestra misión es hacer el conocimiento accesible para todos. Desde clásicos de la literatura hasta los últimos bestsellers y publicaciones científicas, tenemos algo para cada interés y edad.
</p>
<a href="/register" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">

                    Regístrate Ahora
</a>
</div>
</div>
</section>
 
    <footer class="bg-gray-800 text-white py-10">
<div class="container mx-auto px-6 text-center">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
<div>
<h3 class="text-xl font-semibold mb-4">BiblioTech</h3>
<p class="text-gray-400">Tu puerta al conocimiento.</p>
</div>
<div>
<h3 class="text-xl font-semibold mb-4">Enlaces Rápidos</h3>
<ul class="space-y-2">
<li><a href="#" class="text-gray-400 hover:text-white transition">Inicio</a></li>
<li><a href="/login" class="text-gray-400 hover:text-white transition">Login</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition">Contacto</a></li>
</ul>
</div>
<div>
<h3 class="text-xl font-semibold mb-4">Síguenos</h3>
<div class="flex justify-center space-x-4">
<a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook-f text-2xl"></i></a>
<a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter text-2xl"></i></a>
<a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram text-2xl"></i></a>
</div>
</div>
</div>
<hr class="border-gray-700 my-8">
<p class="text-gray-500 text-sm">
&copy; 2024 BiblioTech. Todos los derechos reservados.
</p>
</div>
</footer>
 
    <script>

        const mobileMenuButton = document.getElementById('mobile-menu-button');

        const mobileMenu = document.getElementById('mobile-menu');
 
        mobileMenuButton.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

        });
 
        // Opcional: Cerrar el menú móvil si se redimensiona la ventana a desktop

        window.addEventListener('resize', () => {

            if (window.innerWidth >= 768) { // md breakpoint en Tailwind

                mobileMenu.classList.add('hidden');

            }

        });
</script>
</body>
</html>
