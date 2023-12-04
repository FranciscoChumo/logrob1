<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;

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

Route::get('/',[CategoriaController::class, 'principal']);

Route::get('/indexCategoria',[CategoriaController::class, 'index']);
Route::get('/indexProducto',[ProductoController::class, 'index']);

Route::post('/categoria',[CategoriaController::class,'registrar']);
Route::post('/producto',[ProductoController::class,'saveProducto']);

Route::get('/filtrar', [ProductoController::class, 'filtrar']);
Route::get('/datos', [ProductoController::class, 'mostrar']);

Route::delete('/datos/{id}', [ProductoController::class, 'eliminar']);