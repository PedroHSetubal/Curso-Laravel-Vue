<?php

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

// ------------------------------------------------  INICIO FEITOS ------------------------------------------------
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/contatoFeito', [\App\Http\Controllers\ContatoFeitoController::class, 'contatoFeito'])->name('site.contatoFeito');


// Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('site.login');
Route::get('/login/{erro?}', [\App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao:padrao,visitante,p3,p4')->prefix('/app')->group(function(){

    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('app.home');

    Route::get('/sair', [\App\Http\Controllers\LoginController::class, 'sair'])->name('app.sair');

    Route::get('/cliente', [\App\Http\Controllers\ClienteController::class, 'index'])->name('app.cliente');

    Route::get('/fornecedor', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedor');
    Route::post('/fornecedor/listar', [\App\Http\Controllers\FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', [\App\Http\Controllers\FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', [\App\Http\Controllers\FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');

    Route::get('/produto', [\App\Http\Controllers\ProdutoController::class, 'index'])->name('app.produto');
});

Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

// ------------------------------------------------  FIM FEITOS ------------------------------------------------

// Route::fallback(function(){
//     echo 'A rota acessada não existe. <a href="'.route('site.index').'"> clique aqui </a> para ir para a pagina inicial';
// });
















// ------------------------------------------------  EXEMPLOS ------------------------------------------------

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contato/{nome}/{categoria_id}', function (string $nome, int $categoria_id = 1) { // 1 - 'Informação'
//     echo "Estamos aqui: $nome - $categoria_id";
// })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');