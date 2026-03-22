@extends('layout.admin')

@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Lista de Préstamos</h1>

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('prestamos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Crear Préstamo</a>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700">
                <thead class="bg-gray-50 text-gray-600 uppercase text-xs font-semibold">
                    <tr>
                        <th scope="col" class="px-6 py-4">ID</th>
                        <th scope="col" class="px-6 py-4">LIBRO</th>
                        <th scope="col" class="px-6 py-4">USUARIO</th>
                        <th scope="col" class="px-6 py-4">FECHA</th>
                        <th scope="col" class="px-6 py-4">ESTADO</th>
                        <th scope="col" class="px-6 py-4">FECHA DE ENTREGA</th>
                        <th scope="col" class="px-6 py-4">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($prestamos as $prestamo)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium">{{ $prestamo->id }}</td>
                            <td class="px-6 py-4">{{ $prestamo->libro->nombre }}</td>
                            <td class="px-6 py-4">{{ $prestamo->usuario->name }}</td>
                            <td class="px-6 py-4">{{ $prestamo->created_at->format('Y-m-d') }}</td>
                            <td class="px-6 py-4">
                                @if($prestamo->estado == 'pendiente')
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Pendiente</span>
                                @else
                                    <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Entregado</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if($prestamo->fecha_entrega)
                                    {{ $prestamo->fecha_entrega }}
                                @else
                                    --------
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if($prestamo->estado == 'pendiente')
                                    <a href="{{ route('prestamos.entregar', $prestamo->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Entregar</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection