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
            $table->id();
            $table->bigInteger("autor_id")
                ->index()
                ->unsigned()
                ->nullable();
            $table->bigInteger("categoria_id")
                ->index()
                ->unsigned()
                ->nullable();
$table->text("Nome");
$table->text("descricaocurta");
$table->text("descricaolonga");
$table->text("midiadestaque");
$table->bigInteger("cargahoraria");
$table->text("tipomidia");
            $table->timestamps();
            $table->timestamps();
            $table->foreign('autor_id')
                ->references('id')
                ->on('autores')
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->foreign('comentario_id')
                ->references('id')
                ->on('categorias')
                ->onDelete("cascade")
                ->onUpdate("cascade");
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
