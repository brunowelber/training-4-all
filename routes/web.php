<?php

use Illuminate\Support\Facades\Route;


Route::get('/','CursoController@index');

Route::resource("cursos","CursoController");
Route::resource("categorias","CategoriaController");
Route::resource("autores","AutorController");