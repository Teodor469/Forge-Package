<?php

namespace Teodor\Forge\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Teodor\Forge\Services\SchemaIntrospectionService;

class ForgeServiceProvider extends ServiceProvider
{
    public function register() 
    {
        $this->app->singleton(SchemaIntrospectionService::class, function(Application $app) {
            return new SchemaIntrospectionService;
        });
    }

    public function boot() 
    {
        
    }
}
