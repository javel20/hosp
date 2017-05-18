<?php

use hosp\Tipohabitacion;
use Illuminate\Database\Seeder;

class TipohabitacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipohabitacion::create(['nombre' => 'Simple', 'preciodia'=>'100','preciohora'=>'15', 'descripcion'=>'asd']);
        Tipohabitacion::create(['nombre' => 'Doble', 'preciodia'=>'150','preciohora'=>'20', 'descripcion'=>'asd']);
        Tipohabitacion::create(['nombre' => 'triple', 'preciodia'=>'180','preciohora'=>'30', 'descripcion'=>'asd']);
        Tipohabitacion::create(['nombre' => 'Presidencial', 'preciodia'=>'220','preciohora'=>'50', 'descripcion'=>'asd']);
    }
}
