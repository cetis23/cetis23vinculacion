<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('titulos', function (Blueprint $table) {
            $table->increments('idtitulo');
             $table->string('folio', 60);
             $table->integer('idciclo') ->unsigned();
            $table->foreign('idciclo')->references('idciclo')-> on ('titulos');
             $table->rememberToken();
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
         Schema::drop('titulos');
    }
}