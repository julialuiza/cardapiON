<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardapiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardapios', function (Blueprint $table) {
            $table->increments('id_cardapio');
            $table->integer('id_estabelecimento')->unsigned();
            $table->bigInteger('id_usuario')->unsigned();;
            $table->string('foto_cardapio',255);
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
        Schema::dropIfExists('cardapios');
    }
}
