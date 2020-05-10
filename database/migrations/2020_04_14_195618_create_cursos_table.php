<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("categoria_id")
                ->index()
                ->unsigned()
                ->nullable();
			$table->text("Nome");
$table->text("descricaocurta");
$table->text("descricaolonga");

$table->integer("cargahoraria");
$table->text("midiadestaque");
            $table->timestamps();
			$table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
                ->onDelete("cascade")
                ->onUpdate("cascade");
				$table->engine = "innodb";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
