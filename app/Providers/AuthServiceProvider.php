<?php

namespace App\Providers;

use App\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);


        $gate->define('only-master', function(User $user){

            return $user->nivel_de_acesso == 2;

        });

        $gate->define('master-lider', function(User $user){

            return $user->nivel_de_acesso == 2 || $user->nivel_de_acesso == 1;

        });

        $gate->define('master-lider-user', function(User $user){

            return $user->nivel_de_acesso == 2 || $user->nivel_de_acesso == 1 || $user->nivel_de_acesso == 0;

        });


    }
}
