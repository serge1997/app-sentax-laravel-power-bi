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

    
Route::match(['get', 'post'], 'logar', [UsuarioController::class, 'logar'])
    ->name("logar");

Route::post("/bi/sentax", [UsuarioController::class, 'getbi'])
    ->name('bi.sentax');

Route::post("/bi/sentax/2", [UsuarioController::class, 'getbisecond'])
    ->name('bi.sentaxdois');

Route::post("/bi/sentax/3", [UsuarioController::class, 'getbithree'])
    ->name("bi.sentaxtres");
    
Route::get('/relatorio', function(){
    return view("relatorio");
});
