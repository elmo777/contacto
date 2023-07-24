<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuariocontroller;

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
    return view('index');
});
Route::post('/index.create', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/create', [UsuarioController::class, 'create'])->name('usuarios.create');