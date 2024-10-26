<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>@yield('title', 'Sistema de Ventas')</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles 
</head>

<body class="font-sans bg-gray-100">


    <nav class="bg-slate-500 p-4">
        <div class="container mx-auto flex justify-between items-center">

            <div class="text-white text-2xl font-semibold">
                <a href="{{ url('/') }}">Sistema de Ventas</a>
            </div>


            <div class="hidden md:flex space-x-6 text-white">
                <a href="/home" class="hover:bg-slate-400 px-4 py-2 rounded">Inicio</a>
                <a href="/ventas" class="hover:bg-slate-400 px-4 py-2 rounded">Ventas</a>
                <a href="/productos" class="hover:bg-slate-400 px-4 py-2 rounded">Productos</a>
                <a href="/clientes" class="hover:bg-slate-400 px-4 py-2 rounded">Clientes</a>
                <a href="/reportes" class="hover:bg-slate-400 px-4 py-2 rounded">Reportes</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                    @csrf
                    <button href="#" class="hover:bg-slate-400 px-4 py-2 rounded">Salir</button>
                </form>

            </div>


            <div class="md:hidden">
                <button id="hamburger-btn" class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>


    <div id="mobile-menu" class="md:hidden hidden bg-slate-500 p-4">
        <a href="/home" class="block text-white py-2">Inicio</a>
        <a href="/ventas" class="block text-white py-2">Ventas</a>
        <a href="/productos" class="block text-white py-2">Productos</a>
        <a href="/clientes" class="block text-white py-2">Clientes</a>
        <a href="/reportes" class="block text-white py-2">Reportes</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
            @csrf
            <button href="#" class="hover:bg-slate-400 px-4 py-2 rounded">Salir</button>
        </form>

    </div>


    <div class="container mx-auto p-4 px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12">
        @yield('contenido')
    </div>
    @livewireScripts
<script>
    
    document.getElementById('hamburger-btn').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});
function toggleModal(modalId) {
        const modal = document.getElementById(modalId); 
        modal.classList.toggle('hidden'); 
    }

</script>
</body>

</html>
