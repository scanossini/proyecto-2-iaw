<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($donante_id, $contacto)
    {
        return view('donantes/contactos/edit')->with([
            'donante_id' => $donante_id,
            'contacto' => $contacto
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($donante_id)
    {
            return view('donantes/contactos/create')->with('donante_id', $donante_id);
    }

    public function saveContacto(Request $request){
        
        $donante_id = $request->donante_id;

        $contacto = new Contacto;
        $contacto->tipoContacto = $request->tipoContacto;
        $contacto->valorContacto = $request->valorContacto;
        $contacto->donante_id = $donante_id;

        $contacto->save();
    
        return redirect()->route('getContactos', ['donante' => $donante_id]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit($donante_id, $contacto_id)
    {
        $contacto = Contacto::find($contacto_id);
        return view('donantes/contactos/edit')->with([
            'donante_id' => $donante_id,
            'contacto' => $contacto  
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $donante_id, $contacto_id)
    {

        $contacto = Contacto::find($contacto_id);

        $contacto->tipoContacto = $request->tipoContacto;
        $contacto->valorContacto = $request->valorContacto;

        $contacto->save();
        
        return redirect()->route('getContactos', ['donante' => $donante_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy($contacto_id, $donante_id)
    {
        $contacto = Contacto::find($contacto_id);
        $contacto->delete();
        
        return redirect()->route('getContactos', ['donante' => $donante_id]);
    }
}
