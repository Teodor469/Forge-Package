<?php

namespace Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Teodor\Forge\Providers\ForgeServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ForgeServiceProvider::class,
        ];
    }
}
