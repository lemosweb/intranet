<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function inativaVaga()
    {

        $result = $this->whereDate('validade', '<', Carbon::today())->update(['status' => false]);


        return ($result ? $result : $this->whereDate('validade', '>=', Carbon::today())->update(['status' => true]));


    }
}
