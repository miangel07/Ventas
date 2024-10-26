@extends('layout.app') 

@section('contenido')
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl mx-auto mt-12">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-slate-800">Bienvenido al Sistema de Facturación</h1>
            <p class="text-gray-600 mt-4 text-lg">Administra tus ventas, productos, clientes y reportes con facilidad.</p>
        </div>
     

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          
            <div class="bg-slate-100 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-cash-register text-4xl text-slate-500"></i>
                    <div>
                        <h3 class="text-2xl font-semibold text-slate-800">Ventas</h3>
                        <p class="text-gray-600">Registra y gestiona todas tus ventas de manera eficiente.</p>
                    </div>
                </div>
                <a href="/ventas" class="inline-block mt-4 text-slate-600 hover:text-slate-800 font-semibold">
                    Ir a Ventas <i class="fas fa-arrow-right"></i>
                </a>
            </div>
 

          
            <div class="bg-slate-100 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-box-open text-4xl text-slate-500"></i>
                    <div>
                        <h3 class="text-2xl font-semibold text-slate-800">Productos</h3>
                        <p class="text-gray-600">Administra tu inventario y productos con facilidad.</p>
                    </div>
                </div>
                <a href="/productos" class="inline-block mt-4 text-slate-600 hover:text-slate-800 font-semibold">
                    Ir a Productos <i class="fas fa-arrow-right"></i>


                    @livewireScripts
                </a>
            </div>

            
            <div class="bg-slate-100 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-users text-4xl text-slate-500"></i>
                    <div>
                        <h3 class="text-2xl font-semibold text-slate-800">Clientes</h3>
                        <p class="text-gray-600">Mantén un registro de tus clientes y sus datos.</p>
                    </div>
                </div>
                <a href="/clientes" class="inline-block mt-4 text-slate-600 hover:text-slate-800 font-semibold">
                    Ir a Clientes <i class="fas fa-arrow-right"></i>
                </a>
            </div>

       
            <div class="bg-slate-100 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-chart-line text-4xl text-slate-500"></i>
                    <div>
                        <h3 class="text-2xl font-semibold text-slate-800">Reportes</h3>
                        <p class="text-gray-600">Genera reportes detallados sobre tus operaciones.</p>
                    </div>
                </div>
                <a href="/reportes" class="inline-block mt-4 text-slate-600 hover:text-slate-800 font-semibold">
                    Ver Reportes <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
