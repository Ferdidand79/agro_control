<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Planta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos

    public function muestra(){
        return $this->hasMany('App\Models\Muestra');
    }

    public function indicadores_plaga(){
        return $this->hasMany('App\Models\Indicadores_plaga');
    }

    public function indicadores_parametro(){
        return $this->hasMany('App\Models\Indicadores_parametro');
    }

    //Relacion muchos a muchos

    public function plaga(){
        return $this->belongsToMany('App\Models\Plaga');//id_plaga
    }

    public function parametro(){
        return $this->belongsToMany('App\Models\Parametro');//id_parametro
    }
}
