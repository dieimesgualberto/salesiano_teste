<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    public function serie()
    {
        return $this->belongsTo('App\Series');
    }
    public function alunos()
    {
        return $this->hasMany('App\Alunos');
    }
}
