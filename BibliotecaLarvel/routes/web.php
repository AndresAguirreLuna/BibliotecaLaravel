<?php

use Illuminate\Support\Facades\Route;

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


Route::post('/Autor/store', [AutorController::class, 'store'])->name('autor.store');
Route::post('/Libro/store', [LibroController::class, 'store'])->name('libro.store');
Route::post('/Ejemplar/store', [EjemplarController::class, 'store'])->name('ejemplar.store');
Route::post('/Prestamos/store', [PrestamoController::class, 'store'])->name('prestamos.store');
Route::post('/Usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');


Route::get('/Autor/{id}', [AutorController::class, 'show'])->name('autor.show');
Route::get('/Libro/{id}', [LibroController::class, 'show'])->name('libro.show');
Route::get('/Ejemplar/{id}', [EjemplarController::class, 'show'])->name('ejemplar.show');
Route::get('/Prestamos/{id}', [PrestamoController::class, 'show'])->name('prestamos.show');
Route::get('/Usuario/{id}', [UsuarioController::class, 'show'])->name('usuario.show');

Route::get('/Autor/{id}/edit', [AutorController::class, 'edit'])->name('autor.edit');
Route::get('/Libro/{id}/edit', [LibroController::class, 'edit'])->name('libro.edit');
Route::get('/Ejemplar/{id}/edit', [EjemplarController::class, 'edit'])->name('ejemplar.edit');
Route::get('/Prestamos/{id}/edit', [PrestamoController::class, 'edit'])->name('prestamos.edit');
Route::get('/Usuario/{id}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');

Route::delete('/Autor/{id}', [AutorController::class, 'destroy'])->name('autor.destroy');
Route::delete('/Libro/{id}', [LibroController::class, 'destroy'])->name('libro.destroy');
Route::delete('/Ejemplar/{id}', [EjemplarController::class, 'destroy'])->name('ejemplar.destroy');
Route::delete('/Prestamos/{id}', [PrestamoController::class, 'destroy'])->name('prestamos.destroy');
Route::delete('/Usuario/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
