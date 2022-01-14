<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicadores_plaga extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion 1 a muchos inversa

    public function planta(){
        return $this->belongsTo('App\Models\Planta', 'planta_id');
    }

    public function plaga(){
        return $this->belongsTo('App\Models\Plaga', 'plaga_id');
    }
}
