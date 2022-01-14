<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'estado'];

    const ACTIVO = 1;
    const INACTIVO = 2;

    //Relacion uno a muchos

    public function indice_parametro(){
        return $this->hasMany('App\Models\Indice_parametro');
    }

    public function indice_plaga(){
        return $this->hasMany('App\Models\Indice_plaga');
    }

    //Relacion 1 a muchos inversa

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function muestra(){
        return $this->belongsTo('App\Models\Muestra', 'muestra_id');
    }

    //Relacion muchos a muchos

    public function parametro(){
        return $this->belongsToMany('App\Models\Parametro');//id_parametro
    }

    public function plaga(){
        return $this->belongsToMany('App\Models\Plaga');//id_plaga
    }

    //Relacion uno a uno Polimorfica

    public function resource(){
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    //Relacion uno a muchos Polimorfica

    public function images(){
        return $this->morphToMany('App\Models\Image', 'imageable');
    }

}
