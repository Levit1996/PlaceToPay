<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeticionPago extends Model{

  public function Usuario()
    {
      return  $this->belongsTo('App\Usuario', 'documento_usuario', 'documento');
    }

}
