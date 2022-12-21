<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TipoAnimalController;
use App\Http\Controllers\ProfileController;
use App\Models\Produto;
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
    $items = Produto::all();
    return view('venda', compact('items'));
})->middleware(['auth', 'verified'])->name('venda');
//-----------------------------------------------------

//Rotas direcionando a cadastros
Route::prefix('/cadastro')->group(function (){
    Route::prefix('/departamento')->controller(DepartamentoController::class)->group(function (){
            Route::get('/index', 'index')->name('departamento.index');
            Route::get('/create', 'formCreate')->name('departamento.form.insert');
            Route::get('/update/{id}', 'formUpdate')->name('departamento.form.update');

            Route::post('/', 'insert')->name('departamento.insert');
            Route::put('/{id}', 'update')->name('departamento.update');
            Route::delete('/{id}', 'destroy')->name('departamento.destroy');
    });

    Route::prefix('/tipo-animal')->controller(TipoAnimalController::class)->group(function (){
            Route::get('/index', 'index')->name('tipo-animal.index');
            Route::get('/create', 'formCreate')->name('tipo-animal.form.insert');
            Route::get('/update/{id}', 'formUpdate')->name('tipo-animal.form.update');

            Route::post('/', 'insert')->name('tipo-animal.insert');
            Route::put('/{id}', 'update')->name('tipo-animal.update');
            Route::delete('/{id}', 'destroy')->name('tipo-animal.destroy');
    });

    Route::prefix('/produto')->controller(ProdutoController::class)->group(function (){
        Route::get('/index', 'index')->name('produto.index');
        Route::get('/create', 'formCreate')->name('produto.form.insert');
        Route::get('/update/{id}', 'formUpdate')->name('produto.form.update');

        Route::post('/', 'insert')->name('produto.insert');
        Route::put('/{id}', 'update')->name('produto.update');
        Route::delete('/{id}', 'destroy')->name('produto.destroy');
    });



})->middleware(['auth', 'verified']);



// Rotas de Autenticação
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
