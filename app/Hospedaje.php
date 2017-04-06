<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    public function habitacion()
    {
        return $this->belongsTo('hosp\Habitacion');
    }

    public function trabajador()
    {
        return $this->belongsTo('hosp\Trabajador');
    }

    public function cliente()
    {
        return $this->belongsTo('hosp\Cliente');
    }
}
