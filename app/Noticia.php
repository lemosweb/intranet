<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Noticia extends Model
{
    protected $fillable = [
        'titulo', 'texto', 'link', 'data', 'validade', 'status_aprovacao', 'favorito', 'user_id', 'categoria_id', 'setor_id'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\CategoriaNoticia');
    }

    public function setor()
    {
        return $this->belongsTo('App\Setor');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function inativaNoticia()
    {

        $result = $this->whereDate('validade', '<', Carbon::today())->update(['status' => false]);


        return ($result ? $result : $this->whereDate('validade', '>=', Carbon::today())->update(['status' => true]));


    }
}
