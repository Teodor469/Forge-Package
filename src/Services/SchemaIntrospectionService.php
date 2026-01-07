<?php

namespace Teodor\Forge\Services;


class SchemaIntrospectionService
{
    //! This is Dependency injection
    //? Example I want ot import Request I don't bind it to the method rather I do it here. 
    //?Normally Laravel does it automatically now I need to it
    //!Or the so called "Service Container"
    public function __construct()
    {
        throw new \Exception('Not implemented');
    }

    public function getTables()
    {

    }
}