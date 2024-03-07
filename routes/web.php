<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosCursoController;

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
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/login2', function () {
    return view('login');
})->name('vistalogin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/obtener-cursos', [DatosCursoController::class, 'obtenerCursos']);
Route::get('/carrito', 'DatosCursoController@verCarrito')->name('carrito');
Route::get('/eliminar_del_carrito/{id}', [DatosCursoController::class, 'eliminarDelCarrito']);
Route::get('/agregar_al_carrito', [DatosCursoController::class, 'verCarrito']);
Route::get('/agregar_al_carrito/{id}', [DatosCursoController::class, 'agregarAlCarrito']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
