<?php

use Illuminate\Support\Facades\Route;


Route::get('cursos','CursoController@index');

Route::resource("curso","CursoController");
Route::resource("categorias","CategoriaController");
Route::resource("autores","AutorController");