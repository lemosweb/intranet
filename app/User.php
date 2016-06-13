<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','celular','foto','nivel_de_acesso','status','cargo_id','setor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function artigos()
    {
        return $this->hasMany('App\Artigo');
    }

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

    public function contatos()
    {
        return $this->hasMany('App\Vaga');
    }

    public function setor()
    {
        return $this->belongsTo('App\Setor');
    }

    public function vagas()
    {
        return $this->hasMany('App\Vaga');
    }

    public function enquetes()
    {
        return $this->hasMany(User::class);
    }

    public function respostasEnquete()
    {
        return $this->belongsToMany(Resposta::class,'users_respostas');
    }






}
