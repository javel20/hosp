<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    
    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class);
    }

}
