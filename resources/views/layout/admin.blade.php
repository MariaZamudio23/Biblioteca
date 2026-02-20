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

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</head>

<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

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
            <a href="#" class="hover:text-blue-200">Usuarios</a>
            <a href="#" class="hover:text-blue-200">Libros</a>
            <a href="#" class="hover:text-blue-200">Préstamos</a>
            <a href="#" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg font-semibold transition">
                <i class="fas fa-sign-out-alt mr-2"></i>Salir
            </a>
        </nav>
    </div>
</header>

<div class="flex flex-1 pt-20">
    <!-- SIDEBAR -->
    <aside id="sidebar" 
           class="fixed md:static top-20 left-0 w-64 h-[calc(100vh-5rem)] 
                  bg-white shadow-md transform -translate-x-full md:translate-x-0 
                  transition-transform duration-300 z-40 overflow-y-auto">
        
        <div class="p-6">
            <div class="mb-6 pb-4 border-b border-gray-200">
                <h2 class="font-bold text-gray-800">Menú Principal</h2>
            </div>
            
            <nav class="space-y-2">
                <a href="#" class="flex items-center gap-3 p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg transition">
                    <i class="fas fa-home w-5"></i> Inicio
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg transition">
                    <i class="fas fa-book w-5"></i> Libros
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-lg transition">
                    <i class="fas fa-hand-holding-heart w-5"></i> Préstamos
                </a>
                <a href="{{ route('logout') }}" class="flex items-center gap-3 p-3 text-red-600 hover:bg-red-50 hover:text-red-800 rounded-lg transition mt-6">
                    <i class="fas fa-sign-out-alt w-5"></i> Salir
                </a>
            </nav>
        </div>
    </aside>

    
    @yield('content')

    @include('partials.auth.footer')



