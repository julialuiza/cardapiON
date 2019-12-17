<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostasComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('respostas_comentarios', function (Blueprint $table) {
            $table->increments('id_resposta');
            $table->string('conteudo',255);
            $table->bigInteger('id_usuario')->unsigned();
            $table->integer('id_estabelecimento')->unsigned();
            $table->integer('id_comentario')->unsigned();
            $table->timestamps();
            $table->foreign('id_estabelecimento')
                ->references('id_estabelecimento')
                ->on('estabelecimentos');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users');
            $table->foreign('id_comentario')
                ->references('id_comentario')
                ->on('comentarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respostas_comentarios');
    }
}
