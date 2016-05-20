<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [

            'nome',
            'setor_id'

    ];


    public function vagas()
    {
        return $this->hasMany('App\Vaga');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }


}
