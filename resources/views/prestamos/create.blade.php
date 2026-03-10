@extends('layout.admin')

@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Crear Préstamo</h1>

    <form action="{{ route('prestamos.buscar_usuario') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="usuario_id" class="block text-gray-700 font-bold mb-2">ID Usuario:</label>
            <input type="text" name="usuario_id" id="usuario_id" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="usuario_nombre" class="block text-gray-700 font-bold mb-2">Nombre Usuario:</label>
            <input type="text" name="usuario_nombre" id="usuario_nombre" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>


        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
            <a href="{{ route('prestamos.index') }}" class="inline-block align-baseline font-bold text-sm text-gray-600 hover:text-gray-800 ml-4">Cancelar</a>
        </div>

        @isset($usuario)
            <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                <h2><strong>USUARIO ENCONTRADO</strong></h2>
                <p><strong>ID:</strong> {{ $usuario->id }}</p>
                <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
                <p><strong>Email:</strong> {{ $usuario->email }}</p>
            </div>
        @endisset
        
    </form>
</div>

@endsection