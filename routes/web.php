<?php

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

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/restrito', [HomeController::class, 'restrito'])->name('restrito');
    Route::get('/restrito/usuarios', [HomeController::class, 'usuario'])->name('usuario');
    Route::get('/restrito/artigos', [HomeController::class, 'artigo'])->name('artigo');
});



