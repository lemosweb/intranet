<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'extension', 'artigo_id'
    ];

    public function artigo()
    {
        return $this->belongsTo(Artigo::class);
    }
}
