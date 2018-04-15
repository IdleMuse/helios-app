<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
        Relation::morphMap([
            'ship' => 'App\Ship',
        ]);
    }

    public function register(){
        //
    }
}
