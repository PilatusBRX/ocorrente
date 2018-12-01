<?php

namespace App\Providers;
use App\Chamado;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('ver-chamado', function($user, Chamado $chamado)
        {
            return $user->id == $chamado->user_id;

        });


    }

}//Fim
