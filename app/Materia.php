<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    public function especialidad()
    {
        $this->belongsTo('App\Especialidad');
    }
}

