<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{



    public function autores()
    {
        //relação n para n 
		return $this->belongsToMany('App\Autor');
    }

    public function categoria()
    {
//relação 1 para n
        return $this->hasMany("App\Categoria");
    }
}
