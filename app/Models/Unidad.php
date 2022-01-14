<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
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
}
