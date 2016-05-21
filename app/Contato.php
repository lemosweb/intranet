<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'nextel', 'empresa', 'endereco', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
