<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function hospedaje()
    {
        return $this->hasMany('App\Hospedaje');
    }


    public function scopeLike($query, $dato){
        // dd($dato);
        return $query->where('dni','LIKE', "%$dato->buscar%")
                    ->where('nombre','LIKE', "%$dato->buscar%")
                    ->where('apellidopaterno','LIKE', "%$dato->buscar%")
                    ->where('apellidomaterno','LIKE', "%$dato->buscar%")
                    ->paginate(7);

    }
    
}
