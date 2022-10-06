<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaexercicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichaexercicio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_ficha')->unsigned();
            $table->foreign('fk_ficha')->references('id')->on('ficha');
            $table->integer('fk_exercicio')->unsigner();
            $table->foreign('fk_exercicio')->references('id')->on('exercicio');
            $table->integer('series');
            $table->integer('repeticoes');
            $table->time('intervalo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichaexercicio');
    }
}
