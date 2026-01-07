<?php

namespace Teodor\Forge\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class ForgeServiceProvider extends ServiceProvider
{
    public function register() 
    {
        $this->app->singleton('forge', function () {
            return 'Forge package is working!';
        });
    }

    public function boot() 
    {
        Log::debug(var_export("Hallo nigger!", true));
    }
}
