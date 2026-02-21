@extends('layout.admin')
@section('content')

<div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Agregar libro</h1>

        <form action="{{ route('libros.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="autor" class="block text-gray-700 font-bold mb-2">Autor:</label>
                <input type="text" name="autor" id="autor" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="isbn" class="block text-gray-700 font-bold mb-2">ISBN:</label>
                <input type="text" name="isbn" id="isbn" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="editorial" class="block text-gray-700 font-bold mb-2">Editorial:</label>
                <input type="text" name="editorial" id="editorial" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="categoria" class="block text-gray-700 font-bold mb-2">Categoría:</label>
                <select name="categoria" id="categoria" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Seleccione una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-end">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
                <a href="{{ route('home') }}" class="inline-block align-baseline font-bold text-sm text-gray-600 hover:text-gray-800 ml-4">Cancelar</a>
            </div>
        </form>
    </div>

@endsection