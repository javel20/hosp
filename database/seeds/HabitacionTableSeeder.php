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
        Habitacion::create(['numero' => '1', 'vigencia'=>'Activo','estado' => 'Disponible', 'descripcion'=>'asd','tipohabitacion_id'=>'1']);
        Habitacion::create(['numero' => '2', 'vigencia'=>'Activo','estado' => 'Ocupado', 'descripcion'=>'asd','tipohabitacion_id'=>'2']);
        Habitacion::create(['numero' => '3', 'vigencia'=>'Activo','estado' => 'Reservado', 'descripcion'=>'asd','tipohabitacion_id'=>'3']);
        Habitacion::create(['numero' => '4', 'vigencia'=>'Activo','estado' => 'Disponible', 'descripcion'=>'asd','tipohabitacion_id'=>'2']);
        Habitacion::create(['numero' => '5', 'vigencia'=>'Activo','estado' => 'Ocupado', 'descripcion'=>'asd','tipohabitacion_id'=>'1']);
        Habitacion::create(['numero' => '6', 'vigencia'=>'Activo','estado' => 'Disponible', 'descripcion'=>'asd','tipohabitacion_id'=>'1']);
        Habitacion::create(['numero' => '7', 'vigencia'=>'Activo','estado' => 'Ocupado', 'descripcion'=>'asd','tipohabitacion_id'=>'3']);
        Habitacion::create(['numero' => '8', 'vigencia'=>'Activo','estado' => 'Mantenimiento', 'descripcion'=>'asd','tipohabitacion_id'=>'2']);
        Habitacion::create(['numero' => '9', 'vigencia'=>'Activo','estado' => 'Ocupado', 'descripcion'=>'asd','tipohabitacion_id'=>'2']);
        Habitacion::create(['numero' => '10', 'vigencia'=>'Activo','estado' => 'Reservado', 'descripcion'=>'asd','tipohabitacion_id'=>'4']);
        Habitacion::create(['numero' => '11', 'vigencia'=>'Activo','estado' => 'Disponible', 'descripcion'=>'asd','tipohabitacion_id'=>'2']);
        Habitacion::create(['numero' => '12', 'vigencia'=>'Activo','estado' => 'Ocupado', 'descripcion'=>'asd','tipohabitacion_id'=>'2']);
    }
}
