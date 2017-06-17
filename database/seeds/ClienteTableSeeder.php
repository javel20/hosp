<?php

use hosp\Cliente;
use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habitacion::create(['dni' => '43568576', 'nombre'=>'jose','apellidopaterno' => 'perez', 'apellidomaterno'=>'sandoval','direccion'=>'leguia 654','telefono'=>'983647482','correo'=>'joseperez@gmail.com','descripcion'=>'Regular']);
    }
}
