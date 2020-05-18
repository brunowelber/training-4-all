<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AutorCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_curso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("autor_id")
                ->index()
                ->unsigned()
                ->nullable();

            $table->bigInteger("curso_id")
                ->index()
                ->unsigned()
                ->nullable();

            $table->timestamps();
			$table->foreign('autor_id')
                ->references('id')
                ->on('autores')
                ->onDelete("cascade")
                ->onUpdate("cascade");

			$table->foreign('curso_id')
                ->references('id')
                ->on('cursos')
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
        Schema::dropIfExists('autor_curso');
    }
}
