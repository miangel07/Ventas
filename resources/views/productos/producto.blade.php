@extends('layout.app')

@section('contenido')
    <div class="  p-6">
       <!-- Modal -->
<div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg h-[80vh] overflow-y-auto mx-4">
            <h2 class="text-xl font-semibold mb-4">Agregar Nuevo Producto</h2>
    
            <form action="{{'/productos'}}" method="POST" enctype="multipart/form-data" >
                @csrf
    
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre del Producto</label>
                    <input type="text" name="nombre" id="nombre" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nombre del producto">
                </div>
    
              
                <div class="mb-4">
                    <label for="precio_detal" class="block text-sm font-medium text-gray-700">Precio Detal</label>
                    <input type="number" name="precio_detal" id="precio_detal" required step="0.01"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Precio detal">
                </div>
    
               
                <div class="mb-4">
                    <label for="precio_mayor" class="block text-sm font-medium text-gray-700">Precio al Mayor</label>
                    <input type="number" name="precio_mayor" id="precio_mayor" required step="0.01"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Precio al mayor">
                </div>
    
               
                <div class="mb-4">
                    <label for="cantidad" class="block text-sm font-medium text-gray-700">Cantidad que Entra</label>
                    <input type="number" name="cantidad" id="cantidad" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Cantidad">
                </div>
    
               
                <div class="mb-4">
                    <label for="fecha_vencimiento" class="block text-sm font-medium text-gray-700">Fecha de Vencimiento</label>
                    <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
    
             
                <div class="mb-4">
                    <label for="metodo_pago" class="block text-sm font-medium text-gray-700">Método de Pago</label>
                    <select name="metodo_pago" id="metodo_pago" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="" disabled selected>Selecciona un método de pago</option>
                        <option value="pse">PSE</option>
                        <option value="efectivo">Efectivo</option>
                    </select>
                </div>
    
             
                <div class="mb-4">
                    <label for="usuario_compra" class="block text-sm font-medium text-gray-700">Usuario a quien le Compró</label>
                    <input type="text" name="usuario_compra" id="usuario_compra" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nombre del proveedor">
                </div>
    
              
                <div class="mb-4">
                    <label for="codigo" class="block text-sm font-medium text-gray-700">Código del Producto</label>
                    <input type="text" name="codigo" id="codigo" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Código del producto">
                </div>
    
             
                <div class="mb-4">
                    <label for="valor_unidad" class="block text-sm font-medium text-gray-700">Valor unidad</label>
                    <input type="number" name="valor_unidad" id="valor_unidad" required step="0.01"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Valor para la unidad">
                </div>
    
         
                <div class="mb-4">
                    <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen del Producto</label>
                    <input type="file" name="imagen" id="imagen" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
    
         
                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
                        Guardar Producto
                    </button>
                </div>
            </form>
    
      
            <button onclick="toggleModal('modal')" class="mt-4 bg-red-600 text-white py-2 px-4 rounded">Cerrar</button>
        </div>
    </div>
    
    
    
        <button onclick="toggleModal('modal')" class="mt-4 bg-red-600 text-white py-2 px-4 rounded">Cerrar</button>
    </div>
    
</div>

        <div class="mb-8">
            <h1 class="text-4xl font-semibold text-gray-900">Administrar Productos</h1>
            <p class="text-gray-500 mt-2">Gestiona tu inventario, agrega, edita o elimina productos fácilmente.</p>
        </div>

        <div class="flex flex-wrap gap-2 mb-8 w-full justify-center ">

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                <h3 class="text-2xl font-semibold text-gray-800">Total Productos</h3>
                <p class="text-xl text-gray-500">120</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                <h3 class="text-2xl font-semibold text-gray-800">Productos Activos</h3>
                <p class="text-xl text-gray-500">95</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                <h3 class="text-2xl font-semibold text-gray-800">Productos Inactivos</h3>
                <p class="text-xl text-gray-500">25</p>
            </div>
        </div>



        <div class="mb-6 gap-4 flex justify-between items-center">
            <div class="w-full sm:w-1/3 lg:w-1/4">
                <input type="text" id="searchInput" onkeyup="searchProducts()" placeholder="Buscar productos..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <button onclick="toggleModal('modal')"
            class="bg-blue-600 md:w-[150px] justify-center items-center flex w-[100px] text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
        <i class="fas fa-plus mr-2"></i> Agregar
    </button>
        </div>


        <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-md">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">ID</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Nombre</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Categoría</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Stock</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Precio</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-3">1</td>
                        <td class="px-4 py-3">Producto 1</td>
                        <td class="px-4 py-3">Electrónica</td>
                        <td class="px-4 py-3">25</td>
                        <td class="px-4 py-3">$50.00</td>
                        <td class="px-4 py-3">
                            <a href="#" class="text-green-500 hover:text-green-600 font-semibold">Editar</a> |
                            <a href="#" class="text-red-500 hover:text-red-600 font-semibold">Eliminar</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
