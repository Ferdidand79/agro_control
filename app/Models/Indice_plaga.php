<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indice_plaga extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion 1 a muchos inversa

    public function nivel(){
        return $this->belongsTo('App\Models\Nivel', 'nivel_id');
    }

    public function observacion(){
        return $this->belongsTo('App\Models\Observacion', 'observacion_id');
    }

    public function plaga(){
        return $this->belongsTo('App\Models\Plaga', 'plaga_id');
    }
}
