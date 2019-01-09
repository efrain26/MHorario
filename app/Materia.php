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

    public function semestre()
    {
        $this->belongsTo('App\Semestre');
    }


}

