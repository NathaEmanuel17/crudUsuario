<?php

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
Route::get('/', 'PrincipalController@principal')->name('site.index')->middleware('log.acesso');


Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

Route::get('/login{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');
Route::get('/cadastro', 'RegistroController@index')->name('site.cadastro');
Route::post('/cadastro', 'RegistroController@cadastro')->name('site.cadastro');

Route::middleware('autenticacao:padrao, visitante')->prefix('/app')->group(function() {
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');

    //produtos
    Route::resource('usuario', 'UsuarioController');
});

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});
