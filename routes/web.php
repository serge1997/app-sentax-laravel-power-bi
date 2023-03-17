<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::match(['get', 'post'], '/', [UsuarioController::class, 'index'])
    ->name("inicio");

Route::match(['get', 'post'], '/cadastra', [UsuarioController::class, 'cadastra'])
    ->name("cadastra");

Route::match(['get', 'post'], '/cadastra/usuario', [UsuarioController::class, 'store'])
    ->name("store.user");

Route::match(['get', 'post'], '/logout', [UsuarioController::class, 'logout'])
    ->name("sair");

    
Route::match(['get', 'post'], '/logar', [UsuarioController::class, 'logar'])
    ->name("logar");

Route::post("/kimberly/sentax", [UsuarioController::class, 'getkimberly'])
    ->name('kimberly.sentax');

Route::post("/quimicos/sentax", [UsuarioController::class, 'getquimicos'])
    ->name('quimicos.sentax');

Route::post("/rubbermaid/sentax", [UsuarioController::class, 'getrubbermaid'])
    ->name("rubbermaid.sentax");

Route::post("/outros/sentax", [UsuarioController::class, 'getoutros'])
    ->name('outros.sentax');
    
Route::post("/estoque/sentax", [UsuarioController::class, 'getestoque'])
    ->name('estoque.sentax');

Route::match(['get', 'post'], "/controle/acessso", [UsuarioController::class, 'acesso'])
    ->name('acesso');

Route::get('/relatorio', function(){
    return view("relatorio");
});
