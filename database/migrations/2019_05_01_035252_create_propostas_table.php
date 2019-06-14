<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propostas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('valor');
            $table->string('local');
            $table->string('tempo');
            $table->longText('descricao');
            $table->string('tipo');
            $table->unsignedInteger('status');
            $table->unsignedInteger('finalizar');
            $table->unsignedInteger('user_envia_id');
            $table->unsignedInteger('user_recebe_id');
            $table->foreign('user_envia_id')->references('id')->on('perfil_clientes');
            $table->foreign('user_recebe_id')->references('id')->on('imagems');
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
        Schema::dropIfExists('propostas');
    }
}
