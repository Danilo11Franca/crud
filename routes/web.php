<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [ClientesController::class, "index"])->name("clientes");

Route::get('clientes/inserir', [ClientesController::class, "create"])->name("clientes.inserir");

Route::get('clientes/{id}', [ClientesController::class, "show"])->name("clientes.detalhes");

Route::post('clientes', [ClientesController::class, "insert"])->name("clientes.insert");

Route::get('clientes/{cliente}/edit', [ClientesController::class, "edit"])->name("clientes.edit");

Route::put('clientes/{cliente}', [ClientesController::class, "editar"])->name("clientes.editar");

Route::delete('clientes/{cliente}', [ClientesController::class, "delete"])->name("clientes.delete");

Route::post('clientes/search', [ClientesController::class, "search"])->name("clientes.search");