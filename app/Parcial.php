<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcial extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parciales';

    public function materia(){
        return $this->belongsTo(Materia::class,"id_materia");
    }

    public function usuario(){
        return $this->belongsTo(User::class,"id_user");
    }

    public function recuperatorios(){
        return $this->hasMany(Recuperatorio::class,"id_parcial");
    }
}
