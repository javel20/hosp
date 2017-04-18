<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Tipotrabajador extends Model
{
    public function trabajador()
    {
        return $this->hasMany(Trabajador::class);
    }


    public function scopeLike($query, $dato){
        // dd($dato);
        return $query->where('nombre','LIKE', "%$dato->buscar%")
                    ->paginate(7);

    }

    
}
