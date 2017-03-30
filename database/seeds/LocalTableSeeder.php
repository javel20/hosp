<?php

use hosp\Local;
use Illuminate\Database\Seeder;

class LocalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Local::create(['nombre' => 'hosp1', 'direccion'=>'leguia','telefono' =>'977474748','estado' => 'Habilitado']);
        Local::create(['nombre' => 'hosp2', 'direccion'=>'chiclayo','telefono' =>'977474748','estado' => 'Ocupado']);
     
    }
}
