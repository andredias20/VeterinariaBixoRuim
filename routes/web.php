<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProfileController;
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

Route::get('/pass', function (){
    return view('cadastros/admin');
});

Route::get('/', function () {
    return view('welcome');
});



//Rotas direcionando ao Dashboard variado

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cadastro', function (){
   return view('cadastro');
})->middleware(['auth', 'verified'])->name('cadastro');

Route::get('/venda', function (){
    return view('venda');
})->middleware(['auth', 'verified'])->name('venda');
//-----------------------------------------------------

//Rotas direcionando a cadastros
Route::prefix('/cadastro')->group(function (){
    Route::prefix('/departamento')->group(function (){
            Route::get('/', [DepartamentoController::class, 'index'])->name('departamento.index');
            Route::get('/create', [DepartamentoController::class, 'formCreate'])->name('departamento.form.insert');
            Route::get('/update', [DepartamentoController::class, 'formUpdate'])->name('departamento.form.update');

            Route::post('/', [DepartamentoController::class, 'insert'])->name('departamento.insert');
            Route::patch('/{id}', [DepartamentoController::class, 'update'])->name('departamento.update');
            Route::delete('/{id}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');
    });
});


// Rotas de Autenticação
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
