@extends('layout.admin')

@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Lista de Categorías</h1>

        <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Agregar categoria</a>

        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $categoria->id }}</td>
                            <td class="px-4 py-2">{{ $categoria->nombre }}</td>                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>
@endsection    