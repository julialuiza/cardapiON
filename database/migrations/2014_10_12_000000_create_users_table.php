<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::Select("
        INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
        (1, 'julia', 'jl@g.com', NULL, '$2y$10\$r7xnoiFv97Q8zvaCSl1a5u75uSAiqgUxkT4OlpiUk2lr0L8YaEhYC', NULL, '2019-12-15 05:06:22', '2019-12-15 05:06:22'),
        (2, 'julia', 'julia@g.com', NULL, '$2y$10$4unIr2aWvx7ajgIiOZOHe.jF8SdDP/WdccC7mYTcFmc3tL.fPhWB6', NULL, '2019-12-17 07:30:28', '2019-12-17 07:30:28'),
        (3, 'testando', 'tt@gmail.com', NULL, '$2y$10$04qSPhY8ArPlQv9tIKFjSeAP5hD2v5REqXx3iHuSX0L7ogBmffQ9u', NULL, '2019-12-17 15:47:12', '2019-12-17 15:47:12'),
        (4, 'mano', 'a@gmail.com', NULL, '$2y$10\$cKRMtHedEuqTUz9625eZ8.OfJOKZYUtPstTmgxYkSOi5PqXc3MacO', NULL, '2019-12-17 15:51:00', '2019-12-17 15:51:00'),
        (5, 'manooo', 'mano@g.com', NULL, '$2y$10\$zVNLOHG0A7eaIt2D4H2oRuZznmMqboz2C6NAoLJhIIhkdGaYUq8O.', NULL, '2019-12-17 15:52:44', '2019-12-17 15:52:44'),
        (6, 'andre', 'andre@bd.com', NULL, '$2y$10\$CspKEmf7rYENFbEQIkyfFuzM3X25AVTQxf6Rcst2Tf6WDPL/TlV5m', NULL, '2019-12-17 16:33:51', '2019-12-17 16:33:51'),
        (8, 'exemplo', 'exemplo@gmail.com', NULL, '$2y$10\$nSwksSilxVijV6ceSeyMSO5S/.NaFOaBZ56lgou8VWkNfpMTJnEuG', NULL, '2019-12-17 21:31:22', '2019-12-17 21:31:22'),
        (9, 'test', 'test@gmail.com', NULL, '$2y$10\$eKghaU155dXx/RkAsQ79TecUyEV9nIeDczpj1N4ZYwvIvvmWewz8a', NULL, '2019-12-17 22:38:27', '2019-12-17 22:38:27'),
        (10, 'elton', 'elton@gmail.com', NULL, '$2y$10\$eoyR1U7hJoiUCThWtbExqOVUaJitqhy2pjSWyDSTZeFDNekrUUEQ.', NULL, '2019-12-18 01:12:36', '2019-12-18 01:12:36'),
        (11, 'Amélia', 'amelia@icomp.ufam.edu.br', NULL, '$2y$10$4m9VsxGF/0DjjoQVtsetCuduHdOfv3VaAAvZrWBcJfa4jteYwjClm', NULL, '2019-12-18 01:24:31', '2019-12-18 01:24:31');
        
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
