<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $fillable = [
        'titulo', 'texto', 'link', 'data', 'validade', 'status_aprovacao', 'favorito', 'user_id', 'categoria_id', 'setor_id'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
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
