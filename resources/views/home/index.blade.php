@extends('layout.admin')
@section('content')
        <!-- MAIN CONTENT -->
    <main class="flex-1 p-4 md:p-6 overflow-x-auto">
        <div class="max-w-7xl mx-auto">
            <!-- Título de la página -->
            <header class="mb-8">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Biblioteca Admin</h1>
                <p class="text-gray-600">Sistema de gestión bibliotecaria</p>
            </header>

            <!-- KPI Cards -->
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8" aria-label="Indicadores clave">
                <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <header class="flex justify-between items-start mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Total de libros</h2>
                        <i class="fas fa-book text-blue-600 text-2xl"></i>
                    </header>
                    <p class="text-3xl font-bold text-gray-800">1,247</p>
                    <p class="text-green-600 text-sm mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>5.2% desde el mes pasado
                    </p>
                </article>

                <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <header class="flex justify-between items-start mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Libros prestados</h2>
                        <i class="fas fa-hand-holding-heart text-yellow-600 text-2xl"></i>
                    </header>
                    <p class="text-3xl font-bold text-gray-800">189</p>
                    <p class="text-red-600 text-sm mt-2">
                        <i class="fas fa-arrow-down mr-1"></i>2.1% desde el mes pasado
                    </p>
                </article>

                <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <header class="flex justify-between items-start mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Usuarios activos</h2>
                        <i class="fas fa-users text-green-600 text-2xl"></i>
                    </header>
                    <p class="text-3xl font-bold text-gray-800">543</p>
                    <p class="text-green-600 text-sm mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>12.7% desde el mes pasado
                    </p>
                </article>

                <article class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <header class="flex justify-between items-start mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Devoluciones pendientes</h2>
                        <i class="fas fa-clock text-orange-600 text-2xl"></i>
                    </header>
                    <p class="text-3xl font-bold text-gray-800">24</p>
                    <p class="text-orange-600 text-sm mt-2">
                        <i class="fas fa-exclamation-triangle mr-1"></i>3.4% desde ayer
                    </p>
                </article>
            </section>

            <!-- Sección de Gestión de Libros -->
            <section class="mb-8">
                <header class="mb-4 flex flex-wrap items-center justify-between">
                    <div>
                        <h2 class="text-xl md:text-2xl font-bold text-gray-800">Gestión de Libros</h2>
                        <p class="text-gray-600">Administra el catálogo de libros de la biblioteca</p>
                    </div>
                    
                    <a href="{{ route('libros.create') }}" class="mt-3 sm:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700 transition">
                        <i class="fas fa-plus mr-2"></i>Agregar Libro
                    </a>
                </header>

                <!-- Tabla de libros -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-700">
                            <thead class="bg-gray-50 text-gray-600 uppercase text-xs font-semibold">
                                <tr>
                                    <th scope="col" class="px-6 py-4">TÍTULO</th>
                                    <th scope="col" class="px-6 py-4">AUTOR</th>
                                    <th scope="col" class="px-6 py-4">ISBN</th>
                                    <th scope="col" class="px-6 py-4">CATEGORÍA</th>
                                    <th scope="col" class="px-6 py-4">DISPONIBILIDAD</th>
                                    <th scope="col" class="px-6 py-4">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach($libros as $libro)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 font-medium">{{ $libro->nombre }}</td>
                                    <td class="px-6 py-4">{{ $libro->autor }}</td>
                                    <td class="px-6 py-4">{{ $libro->isbn }}</td>
                                    <td class="px-6 py-4">{{ $libro->categoria->nombre}}</td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Disponible</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-2">
                                            <a href="{{ route('libros.edit', $libro->id) }}" class="text-blue-600 hover:text-blue-800" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800" title="Eliminar">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>

<!-- JavaScript Vanilla -->
<script>
    (function() {
        const btnSidebar = document.getElementById('btnSidebar');
        const sidebar = document.getElementById('sidebar');

        if (btnSidebar && sidebar) {
            // Toggle sidebar
            btnSidebar.addEventListener('click', (e) => {
                e.stopPropagation();
                sidebar.classList.toggle('-translate-x-full');
            });

            // Cerrar sidebar al hacer clic fuera (en móvil)
            document.addEventListener('click', (e) => {
                if (window.innerWidth < 768) {
                    const isClickInsideSidebar = sidebar.contains(e.target);
                    const isClickOnButton = btnSidebar.contains(e.target);
                    
                    if (!isClickInsideSidebar && !isClickOnButton && !sidebar.classList.contains('-translate-x-full')) {
                        sidebar.classList.add('-translate-x-full');
                    }
                }
            });

            // Manejar resize
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 768) {
                    sidebar.classList.remove('-translate-x-full');
                } else {
                    sidebar.classList.add('-translate-x-full');
                }
            });
        }

        // Animación suave para los KPIs
        const kpiCards = document.querySelectorAll('article.bg-white');
        kpiCards.forEach((card, index) => {
            card.style.animation = `fadeInUp 0.5s ease forwards ${index * 0.1}s`;
        });
    })();
</script>

</body>
</html>
@endsection