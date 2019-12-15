<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('estabelecimentos', function (Blueprint $table) 
        {
            $table->increments('id_estabelecimento');
            $table->string('nome',255);
            $table->string('endereco',255);
            $table->string('horario_inicial',255);
            $table->string('horario_final',255);
            $table->string('dias_funcionamento',255);
            $table->decimal('media_nota',2,1)->nullable();
            $table->string('classe',5);
            $table->integer('id_filial')->nullable()->unsigned();
            $table->foreign('id_filial')
                ->references('id_estabelecimento')
                ->on('estabelecimentos');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estabelecimentos');
    }
}
