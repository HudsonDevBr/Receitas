<?php



Route::get('/', 'CategoriaController@index');
Route::get('/categorias/{id}', 'CategoriaController@show');
Route::get('/busca', 'CategoriaController@busca');

Route::resource('receita', 'receitaController');



Auth::routes();

Route::get('/receita/create', 'receitaController@create');

Route::get('/home', 'HomeController@index')->name('home');
