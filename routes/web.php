<?php

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

//Auth::routes();

/* rota para pagina inicial */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('layouts/home');
});

/* rotas para pagina de cadastro e login */
Route::get('cadastro', function (){ 
	return view('auth/register');
})->name('cadastro');

Route::get('login', function () {
    return view('auth/login');
})->name('login');

/* rotas para cadastrar usuario e realizar login */
Route::post('/store','UserController@store')->name('/store');
Route::post('/logar','UserController@logar')->name('/logar');
Route::get('logout', 'UserController@logout')->name('logout');;

/* rota para pagina de feed */
Route::get('/feed','EstabelecimentoController@index')->name('/feed');


/* rota para gerenciar estabelecimento */
Route::get('/cadastroEstabelecimento','EstabelecimentoController@create')->name('cadastroEstabelecimento');
Route::post('salvarEstabelecimento','EstabelecimentoController@store')->name('salvarEstabelecimento');
Route::get('detalhesEstabelecimento/{id}', 'EstabelecimentoController@show')->name('detalheEstabelecimento');
Route::get('avaliarEstabelecimento/{id}', 'EstabelecimentoController@avaliar')->name('avaliarEstabelecimento');
Route::post('salvarAvaliacao', 'EstabelecimentoController@salvarAvaliacao')->name('salvarAvaliacao');
Route::post('procurarEstabelecimento','EstabelecimentoController@procurar')->name('procurarEstabelecimento');

	
/* rota para gerenciar cardapios */
Route::get('/cadastroCardapio','CardapioController@create')->name('cadastroCardapio');
Route::post('salvarCardapio','CardapioController@store')->name('salvarCardapio');

/* rota para gerenciar produtos (pratos, etc) */
Route::get('/cadastroProduto','ProdutoController@create')->name('cadastroProduto');
Route::post('salvarProduto','ProdutoController@store')->name('salvarProduto');

/* rota para gerenciar comentarios e respostas de comentarios */
Route::get('acessarRespostas/{id}', 'EstabelecimentoController@detalhesComentario')->name('acessarRespostas');
Route::post('responderComentario', 'EstabelecimentoController@responderComentario')->name('responderComentario');

/* rota para relatorios */
Route::get('relatorios','RelatorioController@index')->name('relatorios');
Route::post('resultadoRelatorio','RelatorioController@resultadoRelatorio')->name('resultadoRelatorio');