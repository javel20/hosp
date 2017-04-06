<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospedajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->unique();
            $table->string('fechai',10);
            $table->string('fechaf',10);
            $table->string('costo', 7,2);
            $table->string('estado',30);
            $table->string('descripcion',30)->nullable();
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->integer('trabajador_id')->unsigned();
            $table->foreign('trabajador_id')->references('id')->on('trabajadors');
            $table->integer('habitacion_id')->unsigned();
            $table->foreign('habitacion_id')->references('id')->on('habitacions');
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
        Schema::dropIfExists('hospedajes');
    }
}
