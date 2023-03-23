<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\CheckEdit;

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

Route::match(['get', 'post'], '/', [UsuarioController::class, 'logar'])
    ->name("logar");

Route::match(['get', 'post'], '/cadastra', [UsuarioController::class, 'cadastra'])
    ->name("cadastra");

Route::match(['get', 'post'], '/cadastra/usuario', [UsuarioController::class, 'store'])
    ->name("store.user")->middleware(CheckEdit::class);

Route::match(['get', 'post'], '/logout', [UsuarioController::class, 'logout'])
    ->name("sair");

    
Route::match(['get', 'post'], '/inicio', [UsuarioController::class, 'index'])
    ->name("inicio")->middleware('auth');

Route::post("/kimberly/sentax", [UsuarioController::class, 'getkimberly'])
    ->name('kimberly.sentax')->middleware('auth');

Route::post("/quimicos/sentax", [UsuarioController::class, 'getquimicos'])
    ->name('quimicos.sentax')->middleware('auth');

Route::post("/rubbermaid/sentax", [UsuarioController::class, 'getrubbermaid'])
    ->name("rubbermaid.sentax")->middleware('auth');

Route::post("/outros/sentax", [UsuarioController::class, 'getoutros'])
    ->name('outros.sentax')->middleware('auth');
    
Route::post("/estoque/sentax", [UsuarioController::class, 'getestoque'])
    ->name('estoque.sentax')->middleware('auth');

Route::match(['get', 'post'], "/controle/acessso", [UsuarioController::class, 'acesso'])
    ->name('acesso')->middleware(CheckEdit::class);

Route::match(['get', 'post'], "/acesso/{id?}/editar", [UsuarioController::class, 'edit'])
    ->name('edit')->middleware(CheckEdit::class);

Route::post('/excluir/confirmar', [UsuarioController::class, 'confirmDelete'])
    ->name('confirma.delete')->middleware(CheckEdit::class);

Route::post('/acesso/usuario/editado', [UsuarioController::class, 'update'])
    ->name('update')->middleware(CheckEdit::class);

Route::match(['get', 'post'], '/acesso/usuario/{id?}/deletar', [UsuarioController::class, 'destroy'])
    ->name('destroy')->middleware(CheckEdit::class);

