<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    
    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class);
    }

    public function scopeLike($query, $dato){
        // dd($dato);
        return $query->join('trabajador','licencias.trabajador_id', '=', 'trabajador.id')
                    ->where('licencias.nombre','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajador.nombre','LIKE', "%$dato->buscar%")
                    ->orWhere('licencias.fechai','LIKE', "%$dato->buscar%")
                    ->orWhere('licencias.fechaf','LIKE', "%$dato->buscar%")
                    ->select('licencias,*')
                    ->paginate(7);

    }

}
