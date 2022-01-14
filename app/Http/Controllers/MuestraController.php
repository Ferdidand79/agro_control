<?php

namespace App\Http\Controllers;

use App\Models\Muestra;
use App\Models\Planta;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MuestraController extends Controller
{
    public function index(){
        $muestras = Muestra::latest('id')->get();//$muestras = Muestra::where('estado', '1')->latest('id')->get();

        //return $muestras;

        $plantas = Planta::all();
        // Select agregar
        $users = User::all();


        $fecha = Carbon::now();

        $openModal = false;
        return view('muestras.index', compact('muestras', 'plantas', 'users', 'openModal', 'fecha'));
    }

    public function mostrar($id)
    {
        $muestra = Muestra::where('id', $id)->first();

        return json_encode($muestra);
    }

    public function store(Request $request)
    {
        $request->validate([
            'planta_id' => 'required',
            'ubicacion' => 'required',
            'fecha' => 'required',
            'user_id' => 'required',
        ]);

        // return $request

        Muestra::create($request->all());

        //return json_encode($request->all());

        return redirect()->back()->with('success','Persona creada con éxito.');
    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    // public function show(Persona $persona)
    // {
    //     //
    //     return view('persona.show',compact('persona'));
    // }

    /**
     * Muestre el formulario para editar el recurso especificado.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    // public function edit(Persona $persona)
    // {
    //     //
    //     return view('persona.edit',compact('persona'));
    // }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Persona $persona)
    // {
        //GET POST PUT UPDATE DELETE
    //     $request->validate([
    //         'nombres' => 'required',
    //         'apellido_paterno' => 'required',
    //         'apellido_materno' => 'required',
    //         'dni' => 'required',
    //     ]);

    //     $persona->update($request->all());

    //     return redirect()->route('persona.index')
    //                     ->with('success','Persona actualizada con exito!');
    // }

    /**
     * Elimina el recurso especificado del almacenamiento.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Persona $persona)
    // {
    //     $persona->delete();

    //     return redirect()->route('persona.index')
    //                     ->with('success','Persona eliminada con exito!');
    // }
}
