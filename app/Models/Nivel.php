<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos

    public function indice_plaga(){
        return $this->hasMany('App\Models\Indice_plaga');
    }
}
