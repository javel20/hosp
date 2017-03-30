<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function scopeTrabajadors($query)
    {
        return $query->join('users', 'trabajadors.user_id', '=' ,'users.id')
                    ->join('locals', 'trabajadors.local_id', '=' ,'locals.id')
                    ->join('tipotrabajadors', 'trabajadors.tipotrabajador_id', '=' ,'tipotrabajadors.id')
                    ->select('trabajadors.*', 'tipotrabajadors.nombre as nombrett', 'locals.nombre as nombrel','users.name as nameu')
                    ->get();

    }

    


}
