<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public function donante()
    {
        return $this->belongsTo('App\Donante');
    }
}
