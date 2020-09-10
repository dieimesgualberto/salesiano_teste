<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function curso()
    {
        return $this->belongsTo('App\Cursos');
    }
    public function turmas()
    {
        return $this->hasMany('App\Turmas');
    }
}
