<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Enquete extends Model
{

    protected  $fillable = [

        'pergunta',
        'data_fim',
        'status',
        'user_id',
        'setor_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setor()
    {
        return $this->belongsTo(Setor::class);
    }

    public function respostas()
    {
        return $this->hasMany(Resposta::class);
    }

    // Verifica tipo de usuário e carrega enquete de acordo como nível de acesso

    public function carregarEnquete()
    {

        if(Auth::user()->nivel_de_acesso == 2){

            $result = $this->where('status', '1')->get();

            return $result;

        }else{

            $result = $this->where('setor_id', Auth::user()->setor_id)->where('status', '1')->get();

            return $result;

        }
    }


    public function limitarEnquete()
    {
        $result = $this->where('setor_id', Auth::user()->setor_id)->where('status', '1')->count();

        if($result >= 1){

            return true;
        }

        return false;

    }


    public function inativaEnquete()
    {

        $result = $this->whereDate('data_fim', '<', Carbon::today())->update(['status' => '0']);


        return ($result ? $result : $this->whereDate('data_fim', '>=', Carbon::today())->update(['status' => '1']));


    }



}
