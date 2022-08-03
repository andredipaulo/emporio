<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#FORNECEDORES
Route::get('/fornecedor/novo', [App\Http\Controllers\FornecedorController::class, 'create'])->name('fornecedor/novo');
Route::post('/fornecedor/novo', [App\Http\Controllers\FornecedorController::class, 'store'])->name('fornecedor/registra');
Route::get('/fornecedor/ver/{id}', [App\Http\Controllers\FornecedorController::class, 'show'])->name('fornecedor/show');
Route::get('/fornecedor/editar/{id}', [App\Http\Controllers\FornecedorController::class, 'edit'])->name('fornecedor/editar');
Route::post('/fornecedor/editar/{id}', [App\Http\Controllers\FornecedorController::class, 'update'])->name('fornecedor/alterar');
Route::get('/fornecedor/excluir/{id}', [App\Http\Controllers\FornecedorController::class, 'delete'])->name('fornecedor/excluir');
Route::post('/fornecedor/excluir/{id}', [App\Http\Controllers\FornecedorController::class, 'destroy'])->name('fornecedor/apagar');
