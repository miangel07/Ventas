@extends('layout.app')

@section('contenido')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="w-full max-w-2xl bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">
            {{ isset($usuario) ? 'Editar Usuario' : 'Agregar Nuevo Usuario' }}
        </h2>

        <form method="POST" action="{{ isset($usuario) ? route('usuarios.update', $usuario->id) : route('registro.post') }}">
            @csrf
            @if(isset($usuario))
                @method('PUT') 
            @endif

         
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input id="nombre" type="text" name="nombre" value="{{ old('nombre', $usuario->nombre ?? '') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                @error('nombre')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

          
            <div class="mb-4">
                <label for="correo" class="block text-sm font-medium text-gray-700">Correo</label>
                <input id="correo" type="email" name="correo" value="{{ old('correo', $usuario->correo ?? '') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                @error('correo')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

         
            <div class="mb-4">
                <label for="numeroCedula" class="block text-sm font-medium text-gray-700">Número Cédula</label>
                <input id="numeroCedula" type="number" name="numeroCedula" value="{{ old('numeroCedula', $usuario->numeroCedula ?? '') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                @error('numeroCedula')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

         
            @if(!isset($usuario))
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input id="password" type="password" name="password"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmación de Contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                    @error('password_confirmation')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            @endif

         
            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                <input id="direccion" type="text" name="direccion" value="{{ old('direccion', $usuario->direccion ?? '') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                @error('direccion')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

         
            <div class="mb-4">
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input id="telefono" type="text" name="telefono" value="{{ old('telefono', $usuario->telefono ?? '') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                @error('telefono')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

       
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Seleccionar Rol</label>
                <select id="role" name="rol" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="" disabled {{ old('rol', $usuario->rol ?? '') === null ? 'selected' : '' }}>Seleccione el tipo de rol</option>
                    <option value="cliente" {{ old('rol', $usuario->rol ?? '') === 'cliente' ? 'selected' : '' }}>Cliente</option>
                    <option value="provedor" {{ old('rol', $usuario->rol ?? '') === 'provedor' ? 'selected' : '' }}>Proveedor</option>
                </select>
            </div>

    
            <div class="mb-4">
                <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md shadow hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300">
                    {{ isset($usuario) ? 'Actualizar Usuario' : 'Registrar Usuario' }}
                </button>
            </div>
        </form>

  
        <div class="mt-4 text-center">
            <a href="/clientes" class="inline-block px-6 py-2 bg-gray-600 text-white rounded-md shadow hover:bg-gray-500 focus:outline-none focus:ring focus:ring-gray-300">
                Volver
            </a>
        </div>
    </div>
</div>
@endsection
