<?php

use App\Http\Controllers\ClientController;
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

Route::group(['middleware' => ['web']], function () {

    Route::get('view/clients', [ClientController::class, 'index'])->name('clients.get.view');

    Route::get('view/client/{id}', [ClientController::class, 'viewClient'])->name('client.get.view');    

    Route::get('new/client', [ClientController::class, 'pageCreateClient'])->name('client.get.new');

    Route::post('new/client', [ClientController::class, 'createClient'])->name('client.post.new');
    
    Route::get('edit/client/{client}', [ClientController::class, 'pageEditClient'])->name('client.get.edit');

    Route::put('edit/client/{client}', [ClientController::class, 'editClient'])->name('client.put.edit');

    Route::delete('delete/client/{client}', [ClientController::class, 'deleteClient'])->name('client.delete.delete');

    Route::post('search/clients/', [ClientController::class, 'searchClient'])->name('clients.post.search');

});