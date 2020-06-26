<?php

namespace App\Http\Controllers;

use App\Donante;
use Illuminate\Http\Request;

class DonantesController extends Controller
{
    public function list() {
        return Donante::get();
    }

    public function get($id){
        return Donante::findOrFail($id);
    }

}
