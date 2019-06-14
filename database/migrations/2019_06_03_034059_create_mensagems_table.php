<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('mensagem');
            $table->string('date')->nullable();
            $table->unsignedInteger('user_envia_id');
            $table->unsignedInteger('user_recebe_id');
            $table->unsignedInteger('proposta_categoria_id');
            $table->foreign('user_envia_id')->references('id')->on('perfil_clientes');
            $table->foreign('user_recebe_id')->references('id')->on('imagems');
            $table->foreign('proposta_categoria_id')->references('id')->on('proposta_categorias');
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
        Schema::dropIfExists('mensagems');
    }
}
