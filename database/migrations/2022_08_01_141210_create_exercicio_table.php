<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nome', 50);
            $table->string('exercicio');
            $table->integer('fk_grupomuscular')->unsigned();
            $table->foreign('fk_grupomuscular')->references('id')->on('grupomuscular');
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
        Schema::dropIfExists('exercicio');
    }
}
