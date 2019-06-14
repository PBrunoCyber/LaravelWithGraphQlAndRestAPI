<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropostaCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposta_categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('valor');
            $table->string('local');
            $table->string('tempo');
            $table->longText('descricao');
            $table->string('tipo');
            $table->integer('status')->unsigned();
            $table->integer('user_envia_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('user_aceito_id')->unsigned()->nullable();
            $table->foreign('user_envia_id')->references('id')->on('perfil_clientes');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_aceito_id')->references('id')->on('imagems');
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
        Schema::dropIfExists('proposta_categorias');
    }
}
