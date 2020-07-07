<?php

namespace App\Http\Controllers;

use App\Donante;
use App\User;
use App\Contacto;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class DonantesController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donantes = Donante::all();     
        return view('donantes.index')->with('donantes', $donantes);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function edit(Donante $donante)
    {
        if(Gate::denies('edit-users')){
            return view('donantes.editEditor')->with([
                'donante' => $donante
            ]);
        }

        return view('donantes.edit')->with([
            'donante' => $donante
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donante $donante)
    {
        $donante->donacionesDisp = $request->donacionesDisp; 

        if(Gate::allows('edit-users')){
            $donante->nombre = $request->nombre;
            $donante->edad = $request->edad;
            $donante->sexo = $request->sexo;
            $donante->tipoSangre = $request->tipoSangre;
            $donante->donacionesDisp = $request->donacionesDisp;
            $donante->ubicacion = $request->ubicacion;

            if ($request->hasFile('foto'))
            {
                $request->validate([
                    'foto' => 'file|image|max:5000',    
                ]);

                $donante->foto = base64_encode(file_get_contents($request->foto));

            }
        }

        $donante->save();

        return redirect('donantes');
    }


    public function create()
    {
        return view('donantes/create');
    }

    public function saveDonante(Request $request)
    {
        $donante = new Donante;
        $donante->nombre = $request->nombre;
        $donante->edad = $request->edad;
        $donante->sexo = $request->sexo;
        $donante->tipoSangre = $request->tipoSangre;
        $donante->donacionesDisp = $request->donacionesDisp;
        $donante->ubicacion = $request->ubicacion;

        if ($request->hasFile('foto'))
        {
            $request->validate([
                'foto' => 'file|image|max:5000',    
            ]);

            $donante->foto = base64_encode(file_get_contents($request->foto));
        }

        $donante->save();

        return redirect('donantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donante $donante)
    {
        if(Gate::denies('delete-users')){
            return redirect('donantes');
        }

        $donante->contactos()->delete();

        $donante->delete();

        return redirect('donantes');
    }

    public function get($id){
        if(Gate::allows('edit-users')){
            return Donante::findOrFail($id);
        }
        else{
            return view('API.notAllowed');
        }
    }

    public function list(){
        if(Gate::allows('edit-users')){
            return Donante::all();
        }
        else{
            return view('API.notAllowed');
        }
    }


}
