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



Route::middleware(['auth'])->group(function () {//permite acessar  o conteúdo após logado

    Route::get('/', ['as'=>'admin.index', 'uses'=>'ChamadoController@index']);

    Route::get('/adicionar-chamado', ['as'=>'admin.create', 'uses'=>'ChamadoController@create']);


    Route::get('/chamado-{id}', 'ChamadoController@show')->name('show');
    Route::get('/editar-chamado-{id}', 'ChamadoController@edit')->name('edit');
    Route::post('/update{id}', 'ChamadoController@update')->name('update');
    Route::post('/store', 'ChamadoController@store')->name('store');
    Route::get('/destroy{id}', 'ChamadoController@destroy')->name('destroy');

});
Route::get('/home', 'HomeController@index');
Auth::routes();
