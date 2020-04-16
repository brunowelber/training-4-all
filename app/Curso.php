<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $table = "cursos";

    public function autores()
    {
        /*relação n para n 
		return $this->belongsToMany('App\Autor');
    }

    public function categorias()
    {
relação 1 para n
        return $this->hasMany("App\Categoria");
    }
}
