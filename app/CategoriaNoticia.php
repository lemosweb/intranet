<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaNoticia extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function artigos()
    {
        return $this->hasMany('App\Noticia');
    }
}
