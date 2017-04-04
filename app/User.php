<?php

namespace hosp;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function trabajador()
    {
        return $this->hasOne(Trabajador::class);
    }

    public function acceso()
    {
        return $this->belongsToMany('hosp\Accesso');
    }


    public function scopeUsers($query)
    {
        return $query->where('users.estado', '=' ,'Habilitado')
                    ->select('users.*', 'users.nombre as nombreu')
                    ->get();

    }


}
