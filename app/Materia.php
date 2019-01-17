<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function especialidad(){
        return $this->belongsTo('App\Especialidad', 'especialidad_id');
    }
}

