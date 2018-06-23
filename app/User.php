<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function carreras(){
        return $this->belongsToMany(Carrera::class, "usuario_carreras", "id_user", "id_carrera")
            ->withTimestamps();
    }

    public function materias(){
        return $this->belongsToMany(Materia::class, "usuario_materias", "id_user", "id_materia")
            ->withPivot("datos")
            ->withTimestamps();
    }

    public function parciales(){
        return $this->hasMany(Parcial::class,"id_user");
    }

    public function recuperatorios(){
        return $this->hasMany(Recuperatorio::class,"id_user");
    }
}
