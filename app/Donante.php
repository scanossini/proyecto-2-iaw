<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contacto;


class Donante extends Model
{
  public function contactos()
  {
      return $this->hasMany('App\Contacto');
  }
}
