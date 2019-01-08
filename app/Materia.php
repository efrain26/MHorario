<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    protected $table = 'Materias';

    public function especialidad()

    {
        return $this->hasMany('App\especialidad');
    }
}

