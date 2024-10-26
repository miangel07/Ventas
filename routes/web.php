<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\UsuarioControllers;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\productos\ProductoController;
use App\Http\Controllers\Reportes\ReportesController;
use App\Http\Controllers\ventas\VentasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return redirect()->route('login'); 
});
//login
Route::get('/login', [LoginController::class,'showLogin'])->name('login');
Route::post('/login', [LoginController::class,'store']);
Route::post('/logout', [LoginController::class,'destroy'])->name('logout');
//registro
Route::get('/registro',[UsuarioControllers::class,'index'])->name('registro');
Route::get('/clientes',[UsuarioControllers::class,'listarUsuarios'])->name('clientes');
Route::put('/clientes/update/{id}',[UsuarioControllers::class,'update'])->name('usuarios.update');
Route::get('/Formularioclientes',[UsuarioControllers::class,'formularioUsers'])->name('Formularioclientes');
Route::get('/listar/{id}',[UsuarioControllers::class,'show'])->name('/Formularioclientes');
Route::post('/registro', [UsuarioControllers::class, 'create'])->name('registro.post');
Route::get('/cambiarEstado/{id}', [UsuarioControllers::class,'edit'])->name('estado');
//home
Route::get('/home', [HomeController::class, 'index'])->name('home');
//producto
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::post('/productos', [ProductoController::class, 'create']);

//ventas 
Route::get('/ventas', [VentasController::class, 'index'])->name('ventas');

//reportes 
Route::get('/reportes', [ReportesController::class, 'index'])->name('reportes');

