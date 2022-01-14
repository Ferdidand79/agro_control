<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Muestra;
use App\Models\Planta;
use App\Models\User;
use Database\Seeders\MuestraSeeder;

class HomeController extends Controller
{
    public function __invoke()
    {
        $muestras = Muestra::all();//$muestras = Muestra::where('estado', '1')->latest('id')->get();

        //return $muestras;

        $plantas = Planta::all();

        $users = User::all();

        return view('welcome', compact('muestras', 'plantas', 'users'));
    }

    //public function show($id)
    /*{
        $muestrass = Muestra::where('planta_id', '=', $id)->get();

        $planta = Planta::find($id);

        return view('welcome', compact('planta'));
    }*/
}
