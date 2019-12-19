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

        DB::Select("
            INSERT INTO `notas` (`id_nota`, `nota`, `id_usuario`, `id_estabelecimento`, `id_comentario`, `created_at`, `updated_at`) VALUES
            (1, 4, 6, 6, 7, '2019-12-17 16:48:28', '2019-12-17 16:48:28'),
            (2, 5, 1, 6, 9, '2019-12-17 16:51:42', '2019-12-17 16:51:42'),
            (3, 3, 1, 4, 9, '2019-12-17 17:25:20', '2019-12-17 17:25:20'),
            (4, 1, 1, 6, 9, '2019-12-17 18:04:07', '2019-12-17 18:04:07'),
            (5, 5, 1, 6, 9, '2019-12-17 18:23:48', '2019-12-17 18:23:48'),
            (6, 5, 1, 4, 9, '2019-12-17 18:25:00', '2019-12-17 18:25:00'),
            (7, 5, 1, 4, 9, '2019-12-17 18:26:40', '2019-12-17 18:26:40'),
            (8, 5, 1, 4, 9, '2019-12-17 18:26:54', '2019-12-17 18:26:54'),
            (9, 5, 1, 4, 9, '2019-12-17 18:27:12', '2019-12-17 18:27:12'),
            (10, 5, 1, 1, 9, '2019-12-17 18:28:33', '2019-12-17 18:28:33'),
            (11, 5, 1, 1, 9, '2019-12-17 18:28:47', '2019-12-17 18:28:47'),
            (12, 3, 1, 1, 9, '2019-12-17 18:29:03', '2019-12-17 18:29:03'),
            (13, 5, 1, 5, 9, '2019-12-17 18:35:02', '2019-12-17 18:35:02'),
            (14, 5, 1, 5, 9, '2019-12-17 18:35:17', '2019-12-17 18:35:17'),
            (15, 5, 1, 5, 9, '2019-12-17 18:36:32', '2019-12-17 18:36:32'),
            (16, 5, 1, 4, 9, '2019-12-17 18:37:42', '2019-12-17 18:37:42'),
            (17, 4, 1, 6, 9, '2019-12-17 18:38:06', '2019-12-17 18:38:06'),
            (18, 2, 1, 1, 9, '2019-12-17 18:38:27', '2019-12-17 18:38:27'),
            (19, 4, 8, 2, 27, '2019-12-17 21:32:52', '2019-12-17 21:32:52'),
            (20, 4, 8, 3, 27, '2019-12-17 21:33:16', '2019-12-17 21:33:16'),
            (21, 1, 8, 3, 27, '2019-12-17 21:33:37', '2019-12-17 21:33:37'),
            (22, 3, 8, 8, 27, '2019-12-17 21:36:28', '2019-12-17 21:36:28'),
            (23, 4, 9, 9, 31, '2019-12-17 22:41:30', '2019-12-17 22:41:30'),
            (24, 5, 10, 6, 32, '2019-12-18 01:14:14', '2019-12-18 01:14:14'),
            (25, 5, 11, 9, 33, '2019-12-18 01:30:22', '2019-12-18 01:30:22');
        ");
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
