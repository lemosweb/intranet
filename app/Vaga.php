<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = [
        'status',
        'cargo_id'
    ];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }
}
