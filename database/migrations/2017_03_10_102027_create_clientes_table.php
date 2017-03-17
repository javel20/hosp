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
            $table->string('dni',8)->unique();
            $table->string('nombre',60);
            $table->string('apellidopaterno',30);
            $table->string('apellidomaterno',30);
            $table->string('direccion',50)->nullable();
            $table->string('telefono',9)->nullable();
            $table->string('correo',60)->nullable()->unique();
            $table->string('descripcion',100)->nullable();
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
