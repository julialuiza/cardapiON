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

/* rota para feed */
Route::get('/feed','EstabelecimentoController@index')->name('/feed');


Route::get('/cadastroEstabelecimento','EstabelecimentoController@create')->name('/cadastroEstabelecimento');


Route::get('/cadastroCardapio','CardapioController@create')->name('/cadastroCardapio');


Auth::routes();



