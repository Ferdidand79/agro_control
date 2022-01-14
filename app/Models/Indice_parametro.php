<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indice_parametro extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion 1 a muchos inversa

    public function unidad(){
        return $this->belongsTo('App\Models\Unidad', 'unidad_id');
    }

    public function parametro(){
        return $this->belongsTo('App\Models\Parametro', 'parametro_id');
    }

    public function observacion(){
        return $this->belongsTo('App\Models\Observacion', 'observacion_id');
    }
}
