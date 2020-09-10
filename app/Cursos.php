<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    public function escola()
    {
        return $this->belongsTo('App\Escolas');
    }
    public function series()
    {
        return $this->hasMany('App\Series');
    }
}
