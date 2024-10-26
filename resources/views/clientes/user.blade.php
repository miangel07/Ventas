@extends('layout.app')
@section('contenido')
    <div class="p-6">
        @if (session('success'))
            <script>
                window.onload = function() {
                    Swal.fire({
                        title: '¡Éxito!',
                        text: '{{ session('success') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                };
            </script>
        @endif
        <div class="mb-8">
            <h1 class="text-4xl font-semibold text-gray-900">Administrar Usuarios</h1>
            <p class="text-gray-500 mt-2">Gestiona usuarios, asigna roles y permisos fácilmente.</p>
        </div>


        <div class="flex flex-wrap gap-2 mb-8 w-full justify-center">
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                <h3 class="text-2xl font-semibold text-gray-800">Total Usuarios</h3>
                <p class="text-xl text-gray-500">45</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                <h3 class="text-2xl font-semibold text-gray-800">Usuarios Activos</h3>
                <p class="text-xl text-gray-500">38</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                <h3 class="text-2xl font-semibold text-gray-800">Usuarios Nuevos</h3>
                <p class="text-xl text-gray-500">7</p>
            </div>
        </div>

        <div class="mb-6 gap-4 flex justify-between items-center">
            <div class="w-full sm:w-1/3 lg:w-1/4 ">
                <input type="text" id="searchInput" onkeyup="searchProducts()" placeholder="Buscar productos..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <a href="/Formularioclientes"
                class="bg-blue-600 md:w-[150px] justify-center items-center flex w-[100px] text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-700">
                Agregar
            </a>
        </div>

        <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-md">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="border-b">
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-500">ID</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-500">Nombre</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-500">Correo</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-500">Rol</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-500">Estado</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-500">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr class="border-t border-gray-200">
                            <td class="px-4 py-3">{{ $usuario->id }}</td>
                            <td class="px-4 py-3">{{ $usuario->nombre }}</td>
                            <td class="px-4 py-3">{{ $usuario->correo }}</td>
                            <td class="px-4 py-3">{{ $usuario->rol }}</td>
                            <td class="px-4 py-3">
                                <span
                                    class="px-2 py-1 {{ $usuario->estadoUsuario === 'activo' ? 'bg-green-100' : 'bg-red-100' }}  text-green-800 rounded-full text-xs">
                                    {{ $usuario->estadoUsuario }}
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex gap-2 w-[100px] justify-between flex-row">
                                    <a href="/listar/{{ $usuario->id }}"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-all duration-200 ease-in-out">
                                        Editar
                                    </a>
                                    <a href="/cambiarEstado/{{ $usuario->id }}"
                                        class="px-4 py-2 {{ $usuario->estadoUsuario === 'inactivo' ? 'bg-green-500 hover:bg-green-700' : 'bg-red-400 hover:bg-red-600' }}  text-white rounded-lg  transition-all duration-200 ease-in-out">
                                        {{ $usuario->estadoUsuario === 'activo' ? 'Desactivar' : 'Activar' }}
                                    </a>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-6 flex justify-center">
                <nav aria-label="Pagination" class=" rounded-md shadow gap-3 flex">
                    {{ $usuarios->links() }}
                </nav>
            </div>


        </div>
    </div>
@endsection
