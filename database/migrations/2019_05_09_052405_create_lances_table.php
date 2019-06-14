<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data');
            $table->string('horaInicio');
            $table->string('horaFim');
            $table->longText('descricao');
            $table->integer('status');
            $table->integer('user_lance_id')->unsigned();
            $table->integer('proposta_categoria_id')->unsigned();
            $table->foreign('user_lance_id')->references('id')->on('imagems');
            $table->foreign('proposta_categoria_id')->references('id')->on('proposta_categorias');
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
        Schema::dropIfExists('lances');
    }
}
