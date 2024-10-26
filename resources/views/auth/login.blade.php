<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Sistema de Ventas</title>
    
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-[url('https://mediodigital.mx/wp-content/uploads/2023/03/que-es-un-sistema-punto-de-venta-2.png')] bg-cover bg-center">

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="flex justify-center items-center min-h-screen bg-black bg-opacity-50">
 
        <div class="bg-white p-6 md:p-10 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Iniciar sesión</h2>
            
      
            <form action="{{'/login'}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium">Correo electrónico</label>
                    <input type="email" id="email" name="correo" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Introduce tu correo" 
                    value="{{old('correo')}}">
                    @error('correo')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-medium">Contraseña</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Introduce tu contraseña"
                    value="{{old('password')}}">
                    @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Recordarme</label>
                    </div>
                    <a href="#" class="text-sm text-blue-500 hover:text-blue-700">¿Olvidaste tu contraseña?</a>
                </div>
                
                <button type="submit" class="w-full py-2 bg-blue-600 text-white font-bold rounded-md hover:bg-blue-700 transition duration-200">
                    Iniciar sesión
                </button>
            </form>
            
            <div class="mt-4 text-center">
                <span class="text-sm text-gray-600">¿No tienes cuenta? <a href="/registro" class="text-blue-500 hover:text-blue-700">Regístrate</a></span>
            </div>
        </div>
    </div>

</body>
</html>
