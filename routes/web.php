<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

//Route::get('/', function () {
//    return 'olá, Seja Bem vindo!';
//});

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){return 'login';})->name('site.login');

Route::prefix('/app')->group( function(){
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});


Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');


//Route::redirect('/rota2', '/rota1');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.\route('site.index').'">Clique aqui</a> para ir a página inicial';
});



//Route::get('/contato/{nome}/{categoria_id}',
//    function (string $nome,
//              int $categoria_id = 1 // 1 - informação
//    ){
//
//    echo "estamos aqui:  $nome - $categoria_id";
//})->where('categoria_id', '[0-9]+')->where('nome', '[a-zA-Z]+');

