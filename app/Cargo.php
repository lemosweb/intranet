<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [

            'nome',
            'setor_id'

    ];

    public function setor()
    {
        return $this->belongsTo('App\Setor');
    }

    public function vagas()
    {
        return $this->hasMany('App\Vaga');
    }


}
