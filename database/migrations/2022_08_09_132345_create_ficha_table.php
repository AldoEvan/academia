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
        Schema::create('ficha', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_aluno')->unsigned();
            $table->foreign('fk_aluno')->references('id')->on('aluno');
            $table->integer('fk_professor')->unsigner();
            $table->foreign('fk_professor')->references('id')->on('professor');
            $table->date('inicio');
            $table->date('termino');
            $table->string('objetivo', 300);
            $table->string('observação');
            $table->softDeletes();
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
        Schema::dropIfExists('fichaexercicio');
    }
}
