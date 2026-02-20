@extends('layout.auth')
@section('content')
<!-- CONTENIDO PRINCIPAL -->
    <main class="flex-grow flex items-center justify-center p-6">

        <div class="w-full max-w-5xl grid md:grid-cols-2 gap-10">

            <!-- ================= LOGIN ================= -->
            <div class="bg-white shadow-lg rounded-2xl p-8 w-full">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
                    Iniciar Sesión
                </h2>

                <form id="loginForm" action="{{ route('login') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Email
                        </label>
                        <input 
                            type="email"
                            name="email"
                            placeholder="correo@ejemplo.com"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                            required>
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Password
                        </label>
                        <input 
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                            required>
                    </div>

                    <!-- Button -->
                    <button 
                        type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition">
                        Ingresar
                    </button>
                </form>
            </div>

            <!-- ================= REGISTRO ================= -->
            <div class="bg-white shadow-lg rounded-2xl p-8 w-full">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
                    Registro de Usuario
                </h2>

                <form action="{{ route('register') }}" method="POST" class="space-y-5">
                    @csrf

                    <!-- Nombre y Apellido -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                                Nombre
                            </label>
                            <input 
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Tu nombre"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                                required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Email
                        </label>
                        <input 
                            type="email"
                            id="email"
                            name="email"
                            placeholder="correo@ejemplo.com"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                            required>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            Password
                        </label>
                        <input 
                            type="password"
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                            required>
                    </div>

                    <!-- Repetir Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                            Repetir Password
                        </label>
                        <input 
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="••••••••"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                            required>
                    </div>

                    <!-- Button -->
                    <button 
                        type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition">
                        Registrarse
                    </button>
                </form>
            </div>
        </div>
    </main>

@endsection