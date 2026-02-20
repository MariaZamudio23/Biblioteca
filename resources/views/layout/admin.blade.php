<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login | BiblioTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="min-h-screen bg-gray-100 flex flex-col">

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
        <nav class="hidden md:flex items-center space-x-6">
            <a href="#" class="hover:text-blue-200">Inicio</a>
            <a href="{{ route('login') }}" class="border border-white text-white px-4 py-2 rounded-lg font-semibold hover:bg-white hover:text-blue-800 transition">Login</a>
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
                <i class="fas fa-handshake"></i> Categorias
            </a>
            <a href="{{ route('logout') }}" class="flex items-center gap-3 text-red-600 hover:text-red-800">
                <i class="fas fa-sign-out-alt"></i> Salir
            </a>
        </nav>
    </aside>

    @yield('content')

    @include('partials.auth.footer')

