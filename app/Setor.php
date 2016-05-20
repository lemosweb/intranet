<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'nome'
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
