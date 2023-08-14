<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuariocontroller;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('index')->name('usuarios.index');
// });


// ...

Route::get('/', function () {
    return view('login');
})->name('login') ;
Route::get('/register', [LoginController::class, 'Registrousuario'])->name('register');
Route::post('/register', [LoginController::class, 'Crearusuario']);
Route::post('/check', [LoginController::class, 'check']);
Route::get('/salir', [loginController::class, 'sacar'])->name('salir');


Route::get('index', [UsuarioController::class, 'index'])->name('usuarios.index');

Route::post('/index.create', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/crear', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::get('/eliminar/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

Route::get('/editarll/{id}', [UsuarioController::class, 'crear'])->name('usuarios.crear');

Route::get('/editar/{id}', [UsuarioController::class, 'crear'])->name('usuarios.edit');
Route::put('/editar/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');



// ...
