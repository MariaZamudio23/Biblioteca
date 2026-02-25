@extends('layout.admin')

@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Lista de Categorías</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Agregar categoria</a>

        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        <tr class="border-t">
                            <td class="px-4 py-2 border-b">{{ $categoria->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $categoria->nombre }}</td>                            
                            <td class="px-4 py-2 border-b">
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Editar</a>
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded ml-2">Eliminar</button>
                                </form>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- PAGINACION -->
                <div class="px-6 py-4 border-gray-200 flex items-center justify-between"
                    {{$categorias->links()}}
                </div>
        </div>        
    </div>
@endsection    