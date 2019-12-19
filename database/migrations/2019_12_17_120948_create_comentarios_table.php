<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
        DB::Select("
        INSERT INTO `comentarios` (`id_comentario`, `conteudo`, `nota`, `id_usuario`, `id_estabelecimento`, `created_at`, `updated_at`) VALUES
        (7, 'pas', 4, 6, 6, '2019-01-17 16:46:34', '2019-12-17 16:46:34'),
        (9, 'voltarei em breve, obrigadx', 5, 1, 6, '2019-12-17 16:49:56', '2019-12-17 16:49:56'),
        (12, 'nao gostei da comida, sem sal', 1, 1, 6, '2019-12-17 18:04:07', '2019-12-17 18:04:07'),
        (13, 'nao sei nao sei', 5, 1, 6, '2019-12-17 18:23:48', '2019-12-17 18:23:48'),
        (14, 'topssimo', 5, 1, 4, '2019-12-17 18:25:00', '2019-12-17 18:25:00'),
        (15, 't o p', 5, 1, 4, '2019-12-17 18:26:40', '2019-12-17 18:26:40'),
        (16, 'muy bueno', 5, 1, 4, '2019-12-17 18:26:54', '2019-12-17 18:26:54'),
        (17, 'testando', 5, 1, 4, '2019-12-17 18:27:12', '2019-12-17 18:27:12'),
        (18, 'mediano mas ok', 5, 1, 1, '2019-12-17 18:28:33', '2019-12-17 18:28:33'),
        (19, 'eu gostei', 5, 1, 1, '2019-12-17 18:28:47', '2019-12-17 18:28:47'),
        (20, 'meio pombo', 3, 1, 1, '2019-12-17 18:29:03', '2019-12-17 18:29:03'),
        (21, 'testando', 5, 1, 5, '2019-12-17 18:35:01', '2019-12-17 18:35:01'),
        (23, 'uashdas', 5, 1, 5, '2019-12-17 18:36:32', '2019-12-17 18:36:32'),
        (24, 'testando 2', 5, 1, 4, '2019-12-17 18:37:42', '2019-12-17 18:37:42'),
        (25, 'ate q os precos valem a pena', 4, 1, 6, '2019-12-17 18:38:06', '2019-12-17 18:38:06'),
        (26, 'meio pombo mesmo', 2, 1, 1, '2019-12-17 18:38:27', '2019-12-17 18:38:27'),
        (27, 'avaliando hehe', 4, 8, 2, '2019-12-17 21:32:51', '2019-12-17 21:32:51'),
        (28, 'estou avaliando voces', 4, 8, 3, '2019-12-17 21:33:16', '2019-12-17 21:33:16'),
        (29, 'MUITO CARO !!!', 1, 8, 3, '2019-12-17 21:33:37', '2019-12-17 21:33:37'),
        (30, 'mto bom', 3, 8, 8, '2019-12-17 21:36:28', '2019-12-17 21:36:28'),
        (31, 'mto bom', 4, 9, 9, '2019-12-17 22:41:30', '2019-12-17 22:41:30'),
        (32, 'haha', 5, 10, 6, '2019-12-18 01:14:13', '2019-12-18 01:14:13'),
        (33, 'melhor estabelecimento', 5, 11, 9, '2019-12-18 01:30:22', '2019-12-18 01:30:22');        
        ");
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
