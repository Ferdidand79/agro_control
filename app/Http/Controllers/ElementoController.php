<?php

namespace App\Http\Controllers;

use App\Models\Muestra;
use App\Models\Observacion;
use App\Models\Planta;
use App\Models\User;
use Illuminate\Http\Request;

class ElementoController extends Controller
{
    public function index()
    {
        $elementos = Observacion::all();
        $muestras = Muestra::all();

        $plantas = Planta::all();

        $users = User::all();

        return view('elementos.index', compact('elementos', 'muestras', 'plantas', 'users'));
    }
}
