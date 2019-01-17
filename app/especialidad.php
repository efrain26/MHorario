<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidades';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
