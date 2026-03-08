@extends('layout.admin')

@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Lista de Usuarios</h1>

    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Crear Usuario</a>

    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left">ID</th>
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left">Tipo de Usuario</th>
                <th class="px-4 py-2 text-left">Acciones</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td class="px-4 py-2 border-b">{{ $usuario->id }}</td>
                    <td class="px-4 py-2 border-b">{{ $usuario->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $usuario->email }}</td>
                    <td class="px-4 py-2 border-b">{{ $usuario->user_type }}</td>
                    <td class="px-4 py-2 border-b">
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Editar</a>
                        <form action="#" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded ml-2"" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

@endsection