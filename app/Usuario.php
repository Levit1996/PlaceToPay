<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model{


public function PeticionPago()
  {
    return $this->belongsTo('App\PeticionPago', 'documento_usuario', 'documento');
  }

}
