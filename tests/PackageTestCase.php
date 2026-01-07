<?php

namespace Teodor\Forge\tests;

use Teodor\Forge\ForgeServiceProvider;
use Tests\TestCase;



class PackageTestCase extends TestCase
{
    //?Using orchestra test bench and loading the Service Provider into it
    protected function getPackageProviders($app)
    {
        return [
            ForgeServiceProvider::class,
        ];
    }
}