<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

// use hosp\Tipohabitacion;

class Tipohabitacion extends Model
{
    public function habitacions()
    {
        return $this->hasMany(Habitacion::class);
    }

    public function scopeLike($query, $dato){
        // dd($dato);
        return $query->where('nombre','LIKE', "%$dato->buscar%")
                    ->paginate(7);

    }
}
