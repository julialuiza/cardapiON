<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id_comentario');
            $table->string('conteudo',255);
            $table->integer('nota')->unsigned();
            $table->bigInteger('id_usuario')->unsigned();
            $table->integer('id_estabelecimento')->unsigned();
            $table->timestamps();
            $table->foreign('id_estabelecimento')
                ->references('id_estabelecimento')
                ->on('estabelecimentos');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
