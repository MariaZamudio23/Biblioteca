@extends('layout.admin')

@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Lista de Préstamos</h1>

    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Crear Préstamo</a>

    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Acciones</th>
                    <th class="px-4 py-2 text-left"></th>
                    <th class="px-4 py-2 text-left"></th>
                    <th class="px-4 py-2 text-left"></th>
                </tr>
            </thead>
            
            <tbody>
            </tbody>
        </table>
    </div>
</div>

@endsection