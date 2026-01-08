<?php

namespace Teodor\Forge\Services;

use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Log;

class SchemaIntrospectionService
{
    //! This is Dependency injection
    //? Example I want ot import Request I don't bind it to the method rather I do it here. 
    //?Normally Laravel does it automatically now I need to it
    //!Or the so called "Service Container"
    public function __construct(
        private Connection $db
    ) {}

    public function getTables()
    {
        $results = $this->db->select('SELECT table_name FROM information_schema.tables WHERE table_schema = ? AND table_type = ?', ['public', 'BASE TABLE']);

        return collect($results)->pluck('table_name')->toArray();
    }
}