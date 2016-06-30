<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// retornando uma view
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('debugbar', 'HomeController@debugbar');

Route::get('home/{debug}', function ($debug) {
    echo $debug;
    if ($debug)
        \Debugbar::enable();
    else
        \Debugbar::disable();

    return redirect('home');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*Route::get('/logout', function()
{
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
})->before('auth.basic');*/

Route::resource('users', 'UsersController');

// rotas de produtos
Route::group(['prefix'=>'produtos'], function() {

// retornado uma view em subpasta e database, integrando com o Controller
    Route::get('', ['as'=>'produtos', 'uses'=>'ProdutosController@index']);

// rota para criar um novo registro
    Route::get('create', ['as'=>'produtos.create', 'uses'=>'ProdutosController@create']);

// insere o registro
    Route::post('insert', ['as'=>'produtos.insert', 'uses'=>'ProdutosController@store']);

// deleta o registro
    Route::get('{id}/delete', ['as'=>'produtos.delete', 'uses'=>'ProdutosController@destroy']);

// habilita edição do registro
    Route::get('{id}/edit', ['as'=>'produtos.edit', 'uses'=>'ProdutosController@edit']);

// atualiza o registro
    Route::put('{id}/update', ['as'=>'produtos.update', 'uses'=>'ProdutosController@update']);
});