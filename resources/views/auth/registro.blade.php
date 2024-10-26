<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body
    class=" flex justify-center items-center min-h-screen font-sans  bg-[url('https://mediodigital.mx/wp-content/uploads/2023/03/que-es-un-sistema-punto-de-venta-2.png')] bg-cover bg-center">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Registro</h2>

        <form method="POST" action="{{ '/registro' }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input id="email" type="text" name="nombre" value=""
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300"
                    value="{{ old('nombre') }}">
                @error('nombre')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
                <input id="email" type="email" name="correo" value=""
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300"
                    value="{{ old('correo') }}">
                @error('correo')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Numero Cedula</label>
                <input id="email" type="number" name="numeroCedula" value=""
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300"
                    value="{{ old('numeroCedula') }}">
                @error('numeroCedula')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input id="password" type="password" name="password"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300"
                    value="{{ old('password') }}">
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Confirmacion de contraseña</label>
                <input id="password" type="password" name="password_confirmation"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300"
                    value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Dirección</label>
                <input id="password" type="text" name="direccion"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring 
                     focus:border-blue-300"
                    value="{{ old('direccion') }}">
                @error('direccion')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="text" class="block text-sm font-medium text-gray-700">Telefono</label>
                <input id="password" type="text" name="telefono"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="form-checkbox h-4 w-4 text-blue-600">
                    <span class="ml-2 text-sm text-gray-700">Recordar</span>
                </label>


            </div>


            <div>
                <button type="submit"
                    class="w-full px-4 py-2 bg-blue-600 text-white rounded-md shadow hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300">
                    Registrarse
                </button>
            </div>
        </form>
    </div>
</body>

</html>
