<?php

use hosp\Habitacion;
use Illuminate\Database\Seeder;

class HabitacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habitacion::create(['numero' => '20', 'vigencia'=>'asd','estado' => 'Habilitado', 'descripcion'=>'asd','tipohabitacion_id'=>'1']);
        Habitacion::create(['numero' => '21', 'vigencia'=>'asd','estado' => 'Ocupado', 'descripcion'=>'asd','tipohabitacion_id'=>'2']);
     
    }
}
