<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    public function persona(){
        return $this->hasOne('App\Persona');
    }
}
