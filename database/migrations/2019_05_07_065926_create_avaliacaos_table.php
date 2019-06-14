<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->unsignedInteger('estrela');
            $table->unsignedInteger('recomenda');
            $table->longText('descricao');
            $table->unsignedInteger('user_avalia_id');
            $table->unsignedInteger('user_avaliado_id');
            $table->foreign('user_avalia_id')->references('id')->on('perfil_clientes');
            $table->foreign('user_avaliado_id')->references('id')->on('imagems');
            $table->string('date')->nullabel();
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
        Schema::dropIfExists('avaliacoes');
    }
}
