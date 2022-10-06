<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\Console\Helper\Table;

class CreateProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome', 50);
            $table->string('cref', 11);
            $table->string('email', 30);
            $table->integer('cargo', 1);
            $table->softDeletes();
            $table->timestamps();

        }
    
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professor');
    }
}
