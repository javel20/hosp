<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes',function(Blueprint $table){
            $table->increments('id');
            $table->string('dniC')->unique();
            $table->string('nombreC');
            $table->string('apePatC');
            $table->string('apeMatC');
            $table->string('direccionC')->nullable();
            $table->string('telefonoC')->nullable();
            $table->string('correoC')->nullable();
            $table->string('descripcionC')->nullable();
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
        Schema::drop('clientes');
    }
}
