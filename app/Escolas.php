<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolas extends Model
{
    public function cursos()
    {
        return $this->hasMany('App\Cursos');
    }
}
