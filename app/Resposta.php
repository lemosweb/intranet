<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Resposta extends Model
{

    protected $fillable = [

        'resposta',
        'qtd_respostas',
        'enquete_id'

    ];


    public function enquete()
    {
        return $this->belongsTo(Enquete::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_respostas');
    }

    public function contaVoto($id)
    {
        DB::Table('respostas')->whereid($id)->Increment('qtd_respostas');
    }

    public function validaVoto($idEnquete)
    {
        DB::Table('users_enquetes')->insert(['user_id' => Auth::id(), 'enquete_id' => $idEnquete]);
    }

    public function verificaSeJaVotou($enqueteId, $userId)
    {
        $result = DB::table('users_enquetes')->where('user_id', $userId)->where('enquete_id', $enqueteId)->first();

        if($result){
            return true;
        }

        return false;

    }

    public function ativaEnquete($enqueteId)
    {
        if($this->where('enquete_id', $enqueteId)->count() >= 2){

            DB::table('enquetes')->where('id' , $enqueteId )->update(['status' => '1']);

        }


    }




}
