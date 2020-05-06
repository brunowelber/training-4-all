<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
protected $table = "autores";
    
    public function curso(){
        return $this->belongsTo("App\Curso");
    }
}
