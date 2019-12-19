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

        DB::Select("
            INSERT INTO `respostas_comentarios` (`id_resposta`, `conteudo`, `id_usuario`, `id_estabelecimento`, `id_comentario`, `created_at`, `updated_at`) VALUES
            (1, 'tem sal simm', 1, 6, 12, '2019-12-17 18:05:45', '2019-12-17 18:05:45'),
            (2, 'nao tem nao', 1, 6, 12, '2019-12-17 18:06:45', '2019-12-17 18:06:45'),
            (3, 'HAHAHAHA', 1, 6, 12, '2019-12-17 18:07:51', '2019-12-17 18:07:51'),
            (4, 'pq??? DONO AQUI', 1, 1, 20, '2019-12-17 18:38:46', '2019-12-17 18:38:46'),
            (5, 'o q vc quis dizer com isso ?', 1, 5, 23, '2019-12-17 19:11:28', '2019-12-17 19:11:28'),
            (6, 'é bom mesmo !!', 8, 8, 30, '2019-12-17 21:36:49', '2019-12-17 21:36:49'),
            (7, 'vdd mto bom', 9, 9, 31, '2019-12-17 22:41:53', '2019-12-17 22:41:53'),
            (8, 'É verdade', 1, 6, 25, '2019-12-17 23:41:40', '2019-12-17 23:41:40'),
            (9, 'vdd mesmo', 10, 6, 25, '2019-12-18 01:13:55', '2019-12-18 01:13:55'),
            (10, 'Gostei', 11, 8, 30, '2019-12-18 01:26:13', '2019-12-18 01:26:13');
        ");
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
