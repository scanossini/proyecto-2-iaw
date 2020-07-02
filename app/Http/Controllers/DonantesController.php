<?php

namespace App\Http\Controllers;

use App\Donante;
use App\User;
use Illuminate\Http\Request;

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donante  $donante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donante $donante)
    {
        //
    }

    public function list() {
        return Donante::get();
    }
    public function listU() {
        return User::get();
    }

    public function get($id){
        return Donante::findOrFail($id);
    }

}
