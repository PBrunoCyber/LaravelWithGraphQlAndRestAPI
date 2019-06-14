<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('reply');
            $table->string('date')->nullable();
            $table->unsignedInteger('user_envia_id');
            $table->unsignedInteger('user_recebe_id');
            $table->unsignedInteger('mensagem_id');
            $table->foreign('user_envia_id')->references('id')->on('imagems');
            $table->foreign('user_recebe_id')->references('id')->on('perfil_clientes');
            $table->foreign('mensagem_id')->references('id')->on('mensagems');
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
        Schema::dropIfExists('respostas');
    }
}
