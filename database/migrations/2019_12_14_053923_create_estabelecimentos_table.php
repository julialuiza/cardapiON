<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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

        DB::Select("
            INSERT INTO `estabelecimentos` (`id_estabelecimento`, `nome`, `endereco`, `horario_inicial`, `horario_final`, `dias_funcionamento`, `media_nota`, `classe`, `id_filial`, `created_at`, `updated_at`) VALUES
            (1, 'teste', 'rua teste', '08:00', '00:00', 'Domingo a Domingo', '3.8', '$$$', NULL, '2019-12-15 05:10:35', '2019-12-17 18:38:28'),
            (2, 'teste2', 'teste2', '01:01', '12:12', 'Segunda a Sexta', '4.0', '$', NULL, '2019-12-15 05:31:41', '2019-12-17 21:32:52'),
            (3, 'teste3', 'iuiou', '08:59', '08:59', 'Segunda a Sábado', '2.5', '$$$$$', NULL, '2019-12-15 05:32:06', '2019-12-17 21:33:38'),
            (4, 'estabelecimento top', 'rua dos bobs', '07:08', '23:00', 'Domingo a Domingo', '5.0', '$$', NULL, '2019-12-15 05:32:28', '2019-12-17 18:37:42'),
            (5, 'teste ultimate', 'ksjkflds', '01:01', '12:01', 'Segunda a Sábado', '5.0', '$$', NULL, '2019-12-15 05:32:46', '2019-12-17 18:36:32'),
            (6, 'Cardapion Estabelecimento', 'rua dos bobos', '07:00', '18:00', 'Segunda a Sábado', '4.0', '$$$', NULL, '2019-12-15 06:06:39', '2019-12-18 01:14:14'),
            (7, 'uhu', 'uhuh', '08:59', '09:08', 'Domingo a Domingo', NULL, '$$', NULL, '2019-12-17 07:38:10', '2019-12-17 07:38:10'),
            (8, 'exemplo', 'rua do exemplo', '09:00', '23:00', 'Segunda a Sexta', '3.0', '$$$', NULL, '2019-12-17 21:34:50', '2019-12-17 21:36:28'),
            (9, 'ufam', 'rua bla bla', '09:59', '18:00', 'Segunda a Sábado', '4.5', '$$$', NULL, '2019-12-17 22:39:53', '2019-12-18 01:30:22');
        ");
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
