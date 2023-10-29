<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cardapio', [HomeController::class, 'cardapio'])->name('cardapio');
Route::get('/teste', function() {
    return storage_path();
});
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/restrito', [HomeController::class, 'restrito'])->name('restrito');
    Route::get('/restrito/usuarios', [HomeController::class, 'usuario'])->name('usuario');
    Route::get('/restrito/artigos', [HomeController::class, 'artigo'])->name('artigo');
    Route::get('/restrito/modelos', [HomeController::class, 'modelo'])->name('modelo');
    Route::get('/restrito/cardapio', [CardapioController::class, 'cardapio'])->name('cardapio');
    Route::post('/restrito/cardapio', [CardapioController::class, 'cad'])->name('cad_cardapio');
    Route::get('/restrito/ingredientes', [CardapioController::class, 'ingredientes'])->name('ingredientes');
    Route::get('/restrito/ingredientes/{id}', [CardapioController::class, 'ingredientes']);
    Route::post('/restrito/ingredientes', [CardapioController::class, 'cad_ingrediente'])->name('cad_ingrediente');
    Route::post('/restrito/cad_prato', [CardapioController::class, 'cad_prato'])->name('cad_prato');
    Route::post('/restrito/cad_valor', [CardapioController::class, 'cad_valor'])->name('cad_valor');

});



