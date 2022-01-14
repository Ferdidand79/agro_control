<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muestra extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'estado'];
    protected $withCount = ['planta'];//contar el numero deplantas

    protected $fillable = ['ubicacion', 'fecha', 'user_id', 'planta_id'];

    const ACTIVO = 1;
    const INACTIVO = 2;

    //Relacion 1 a muchos

    public function observacion(){
        return $this->hasMany('App\Models\Observacion');
    }

    //Relacion 1 a muchos inversa

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function planta(){
        return $this->belongsTo('App\Models\Planta', 'planta_id');
    }
}
