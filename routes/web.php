<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LocalizacionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //rutas del login creadas por el breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //rutas de productos
    Route::resource('/productos', ProductoController::class);
    Route::get('/productos/delete/{id}', [ProductoController::class, 'destroy']);
    Route::post('/productos/addLocalizacion/{id}', [ProductoController::class, 'addLocalizacion']);
    Route::get('/productos/showProductoLocalizacion/{id}', [ProductoController::class, 'showProductoLocalizacion']);
    Route::post('/productos/buscar', [ProductoController::class, 'buscar'])->name('productos.buscar');

    //rutas de categorias
    Route::resource('/categorias', CategoriaController::class);
    Route::get('/categorias/delete/{id}', [CategoriaController::class, 'destroy']);


    //rutas de localizaciones
    Route::resource('/localizacions', LocalizacionController::class);
    Route::get('/localizacions/delete/{id}', [LocalizacionController::class, 'destroy']);
});

require __DIR__ . '/auth.php';
