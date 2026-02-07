<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca | BiblioTech</title>

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans min-h-screen">

<!-- HEADER -->
<header class="fixed top-0 left-0 right-0 z-50 bg-blue-800 text-white shadow">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center gap-4">
            <!-- Botón hamburguesa -->
            <button id="btnSidebar" class="md:hidden text-2xl">
                <i class="fas fa-bars"></i>
            </button>

            <span class="text-xl font-bold tracking-wide">BiblioTech</span>
        </div>

        <!-- Menú Header -->
        <nav class="hidden md:flex space-x-8">
            <a href="#" class="hover:text-blue-200">Inicio</a>
            <a href="#" class="hover:text-blue-200">Usuarios</a>
            <a href="#" class="hover:text-blue-200">Libros</a>
            <a href="#" class="hover:text-blue-200">Préstamos</a>
            <a href="#" class="hover:text-red-300">Salir</a>
        </nav>
    </div>
</header>

<div class="flex pt-20">

    <!-- SIDEBAR -->
    <aside id="sidebar"
        class="fixed md:static top-20 left-0 w-64 h-[calc(100vh-5rem)]
               bg-white shadow-md transform -translate-x-full md:translate-x-0
               transition-transform duration-300 z-40">

        <nav class="p-6 space-y-4">
            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-blue-700">
                <i class="fas fa-home"></i> Inicio
            </a>
            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-blue-700">
                <i class="fas fa-book"></i> Libros
            </a>
            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-blue-700">
                <i class="fas fa-handshake"></i> Préstamos
            </a>
            <a href="#" class="flex items-center gap-3 text-red-600 hover:text-red-800">
                <i class="fas fa-sign-out-alt"></i> Salir
            </a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 md:ml-64 p-0">

    <div class="px-4 pt-2">
    <!-- HERO -->
    <section
        class="relative h-[60vh] rounded-lg overflow-hidden mb-10 bg-center bg-cover"
        style="background-image: url('https://www.gaceta.udg.mx/wp-content/uploads/2020/05/Biblioteca-grande-de-libros-alfons-morales.jpg');">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Contenido -->
        <div class="relative z-10 h-full flex flex-col justify-center items-center text-center text-white p-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Descubre un Mundo de Conocimiento
            </h1>
            <p class="text-lg md:text-xl mb-6 max-w-2xl">
                Gestiona libros, usuarios y préstamos desde un solo lugar
            </p>
            <a href="#"
            class="inline-block bg-blue-600 hover:bg-blue-700 px-10 py-3 rounded-full font-semibold transition">
                Explorar
            </a>
        </div>
    </section>


        <!-- SERVICIOS -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <article class="bg-white p-6 rounded-lg shadow text-center">
                <img
                    src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80"
                    alt="Búsqueda de libros"
                    class="w-full h-40 object-cover rounded-md mb-4">

                <h3 class="font-semibold text-xl mb-2">Búsqueda</h3>
                <p class="text-gray-600">Encuentra libros fácilmente</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow text-center">
                <img
                    src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=600&q=80"
                    alt="Usuarios leyendo"
                    class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Usuarios</h3>
                <p class="text-gray-600">Control de lectores</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow text-center">
                <img
                    src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=600&q=80"
                    alt="Libros en estantería"
                    class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Préstamos</h3>
                <p class="text-gray-600">Historial y control</p>
            </article>
        </section>
        </div>
    </main>
</div>

<!-- FOOTER -->
<footer class="bg-gray-800 text-gray-300 mt-10">
    <div class="text-center py-6 text-sm">
        © 2024 BiblioTech · Todos los derechos reservados
    </div>
</footer>

<!-- JS Vanilla -->
<script>
    const btnSidebar = document.getElementById('btnSidebar');
    const sidebar = document.getElementById('sidebar');

    btnSidebar.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            sidebar.classList.remove('-translate-x-full');
        } else {
            sidebar.classList.add('-translate-x-full');
        }
    });
</script>

</body>
</html>
