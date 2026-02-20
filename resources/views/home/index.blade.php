@extends('layout.admin')
@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-1 p-0">

    <div class="px-4 pt-2">
    <!-- HERO -->
    <section
        class="relative h-[60vh] rounded-lg overflow-hidden mb-10 bg-center bg-cover"
        style="background-image: url('https://media.istockphoto.com/id/539673956/es/foto/biblioteca-pasillo-con-estantes-de-madera-y-cientos-de-libros.jpg?s=612x612&w=0&k=20&c=zfoA76X6VP-YOqBBGcSKwIoc34HDr4rcmNd_DGv3sMw=');">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Contenido -->
        <div class="relative z-10 h-full flex flex-col justify-center items-center text-center text-white p-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Descubre un Mundo de Conocimiento
            </h1>
            <p class="text-lg md:text-xl mb-6 max-w-2xl">
                Gestiona libros, usuarios y préstamos desde un solo lugar
            </p>
            <a href="#"
            class="inline-block bg-blue-600 hover:bg-blue-700 px-10 py-3 rounded-full font-semibold transition">
                Explorar
            </a>
        </div>
    </section>


        <!-- SERVICIOS -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <article class="bg-white p-6 rounded-lg shadow text-center">
                <img
                    src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80"
                    alt="Búsqueda de libros"
                    class="w-full h-40 object-cover rounded-md mb-4">

                <h3 class="font-semibold text-xl mb-2">Búsqueda</h3>
                <p class="text-gray-600">Encuentra libros fácilmente</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow text-center">
                <img
                    src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=600&q=80"
                    alt="Usuarios leyendo"
                    class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Usuarios</h3>
                <p class="text-gray-600">Control de lectores</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow text-center">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ751PtOLRic7JO9XCYqQnS6tddPSjgaT82zw&s"
                    alt="Libros en estantería"
                    class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="font-semibold text-xl mb-2">Préstamos</h3>
                <p class="text-gray-600">Historial y control</p>
            </article>
        </section>
        </div>
    </main>
</div>

<!-- JS Vanilla -->
<script>
    const btnSidebar = document.getElementById('btnSidebar');
    const sidebar = document.getElementById('sidebar');

    btnSidebar.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            sidebar.classList.remove('-translate-x-full');
        } else {
            sidebar.classList.add('-translate-x-full');
        }
    });
</script>

</body>
</html>

@endsection