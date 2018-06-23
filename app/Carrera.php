<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carreras';

    public function usuarios(){
        return $this->belongsToMany(User::class, "usuario_carreras", "id_carrera", "id_user")
            ->withTimestamps();
    }

    public function materias(){
        return $this->hasMany(Materia::class,"id_carrera");
    }
}
