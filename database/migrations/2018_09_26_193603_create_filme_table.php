<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 20);
            $table->integer('ano');
            $table->string('diretor', 12);
            $table->float('nota');
            $table->string('sinopse', 150);
            $table->integer('cadastro_id')->unsigned();
            $table->foreign('cadastro_id')->references('id')->on('cadastro')->onDelet('cascade');
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
        Schema::dropIfExists('filme');
    }
}
