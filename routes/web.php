<?php

use Illuminate\Support\Facades\Route;

//Não exclua essa linha, permite abrir algo ao chamar só o domínio
Route::get('/','CursoController@index');
Route::get('cursos','CursoController@index');

Route::resource("curso","CursoController");
Route::resource("categorias","CategoriaController");
Route::resource("autores","AutorController");
