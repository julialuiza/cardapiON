<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id_nota');
            $table->integer('nota')->unsigned();
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
        Schema::dropIfExists('notas');
    }
}
