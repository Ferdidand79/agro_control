<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos

    public function indicadores_parametro(){
        return $this->hasMany('App\Models\Indicadores_parametro');
    }

    public function indice_parametro(){
        return $this->hasMany('App\Models\Indice_parametro');
    }

    //Relacion muchos a muchos

    public function planta(){
        return $this->belongsToMany('App\Models\Planta');//id_planta
    }

    public function observacion(){
        return $this->belongsToMany('App\Models\Observacion');//id_observacion
    }
}
