<?php
use App\Categoria;

Route::get('/', 'CategoriaController@index');
Route::get('/categorias/{id}', 'CategoriaController@show');

Route::resource('receita', 'receitaController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
