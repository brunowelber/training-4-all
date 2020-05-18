<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cursos")->insert(["nome"=>"Programação","categoria_id"=>1,"descricaocurta"=>"Descrição curta do curso de programação","descricaolonga"=>"A descrição longa desse curso de programação nem é tão longa quanto deveria ser longa","cargahoraria"=>20,"midiadestaque"=>"foto.jpeg"]);
    }
}
