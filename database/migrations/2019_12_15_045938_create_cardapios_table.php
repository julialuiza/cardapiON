<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
        DB::Select("
        INSERT INTO `cardapios` (`id_cardapio`, `id_estabelecimento`, `id_usuario`, `foto_cardapio`, `created_at`, `updated_at`) VALUES
        (1, 4, 2, '040414201912175df853be0abc0.jpeg', '2019-12-17 08:04:14', '2019-12-17 08:04:14'),
        (2, 7, 2, '040758201912175df8549e7c479.png', '2019-12-17 08:07:58', '2019-12-17 08:07:58'),
        (3, 6, 2, '040814201912175df854ae8a2bc.jpeg', '2019-12-17 08:08:14', '2019-12-17 08:08:14'),
        (4, 6, 2, '050819201912175df862c3cbb65.jpeg', '2019-12-17 09:08:19', '2019-12-17 09:08:19'),
        (5, 4, 5, '115355201912175df8c1d3e2032.png', '2019-12-17 15:53:56', '2019-12-17 15:53:56'),
        (6, 8, 8, '173534201912175df911e600b0f.jpeg', '2019-12-17 21:35:34', '2019-12-17 21:35:34'),
        (7, 9, 9, '184042201912175df9212a13a5f.png', '2019-12-17 22:40:42', '2019-12-17 22:40:42');
        ");
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
