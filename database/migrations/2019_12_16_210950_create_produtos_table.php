<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->string('nome',255);
            $table->decimal('preco',5,2);
            $table->string('foto',255)->nullable();
            $table->integer('id_estabelecimento')->nullable()->unsigned();
            $table->foreign('id_estabelecimento')
                ->references('id_estabelecimento')
                ->on('estabelecimentos');
            $table->timestamps(); 
        });
        DB::Select("
        INSERT INTO `produtos` (`id_produto`, `nome`, `preco`, `foto`, `id_estabelecimento`, `created_at`, `updated_at`) VALUES
        (1, 'julia prato', '10.00', NULL, 6, '2019-12-17 07:38:51', '2019-12-17 07:38:51'),
        (2, 'testseteste', '3.00', NULL, 5, '2019-12-17 08:10:18', '2019-12-17 08:10:18'),
        (3, 'aa', '22.00', '041137201912175df85579cec2c.jpeg', 4, '2019-12-17 08:11:37', '2019-12-17 08:11:37'),
        (4, 'macarronada', '40.00', NULL, 4, '2019-12-17 18:55:04', '2019-12-17 18:55:04'),
        (5, 'pizza', '20.00', NULL, 7, '2019-12-17 19:10:31', '2019-12-17 19:10:31'),
        (6, 'klasd', '34.00', NULL, 9, '2019-12-17 22:41:03', '2019-12-17 22:41:03');        
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
