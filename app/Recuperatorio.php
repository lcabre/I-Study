<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recuperatorio extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recuperatorios';

    public function recuperatorios(){
        return $this->belongsTo(Parcial::class,"id_parcial");
    }

    public function usuario(){
        return $this->belongsTo(User::class,"id_user");
    }
}
