<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    public function persona(){
        return $this->belongsTo('App\Persona', 'persona_id');
    }
    public function especialidad(){
        return $this->belongsTo('App\Especialidad', 'especialidad_id');
    }
}
