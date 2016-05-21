<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = [
        'descricao',
        'validade',
        'cargo_id',
        'setor_id',
        'user_id',

    ];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

    public function setor()
    {
        return $this->belongsTo('App\Setor');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
