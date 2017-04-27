<?php

use hosp\Trabajador;

use Illuminate\Database\Seeder;

class TrabajadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trabajador::create(['nombre' => 'jose', 'apellidopaterno' => 'vidaurre', 'apellidomaterno' => 'solis', 'direccion' => 'bleguia', 'celular' => '975839183', 'operador' => 'Rpm', 'estado' => 'Contratado', 'tipotrabajador_id' => '1','local_id' => '1']);
        Trabajador::create(['nombre' => 'maria', 'apellidopaterno'=>'portal', 'apellidomaterno' => 'elias','direccion' =>'tacna', 'celular'=> '983761843','operador'=>'Movistar','estado'=>'Contratado', 'tipotrabajador_id'=>'2','local_id'=>'1']);
        Trabajador::create(['nombre' => 'luis', 'apellidopaterno'=>'chamorro','apellidomaterno' => 'benavente','direccion' =>'nicanor', 'celular'=> '975846333','operador'=>'Rpc','estado'=>'Contratado', 'tipotrabajador_id'=>'2','local_id'=>'1']);
        Trabajador::create(['nombre' => 'yahaira', 'apellidopaterno'=>'juarez', 'apellidomaterno' => 'pizarro','direccion' =>'bulnes', 'celular'=> '974663823','operador'=>'Entel','estado'=>'Contratado','tipotrabajador_id'=>'3','local_id'=>'1']);
    }
}
