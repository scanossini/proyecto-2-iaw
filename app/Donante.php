<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
  public function contactos()
  {
      return $this->hasMany('App\Contacto');
  }
}
