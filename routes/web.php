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
Route::get('/fornecedor', [App\Http\Controllers\FornecedorController::class, 'read'])->name('fornecedor/read');
Route::get('/fornecedor/show/{id}', [App\Http\Controllers\FornecedorController::class, 'show'])->name('fornecedor/show');

Route::get('/fornecedor/edit/{id}', [App\Http\Controllers\FornecedorController::class, 'edit'])->name('fornecedor/edit');
Route::post('/fornecedor/update/{id}', [App\Http\Controllers\FornecedorController::class, 'update'])->name('fornecedor/update');

Route::get('/fornecedor/create', [App\Http\Controllers\FornecedorController::class, 'create'])->name('fornecedor/create');
Route::post('/fornecedor/save', [App\Http\Controllers\FornecedorController::class, 'save'])->name('fornecedor/save');

Route::get('/fornecedor/delete/{id}', [App\Http\Controllers\FornecedorController::class, 'delete'])->name('fornecedor/delete');
