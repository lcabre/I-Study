<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'materias';

    public function carrera(){
        return $this->belongsTo(Carrera::class,"id_carrera");
    }

    public function correlativas(){
        return $this->hasMany(Materia::class,"codigo",'correlativas->codigos' );
    }

    public function usuarios(){
        return $this->belongsToMany(User::class, "usuario_materias", "id_materia", "id_user")
            ->withPivot("datos")
            ->withTimestamps();
    }

    public function parciales(){
        return $this->hasMany(Parcial::class,"id_materia");
    }
}
