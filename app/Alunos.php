<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    public function turma()
    {
        return $this->belongsTo('App\Turmas');
    }
}
