<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacions', function(Blueprint $table){

            $table->increments('id');
            $table->integer('numero');
            $table->string('vigencia', 40);
            $table->string('estado', 40);
            $table->string('descripcion', 100)->nullable();
            $table->integer('tipohabitacion_id')->unsigned();
            $table->foreign('tipohabitacion_id')->references('id')->on('tipohabitacions');
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
        Schema::drop('habitacions');
    }
}
