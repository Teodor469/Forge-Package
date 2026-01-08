<?php

use Illuminate\Support\Facades\Schema;
use Teodor\Forge\Services\SchemaIntrospectionService;

test('schema introspection service can read database tables', function () {
    Schema::dropIfExists('random_table');
    
    Schema::create('random_table', function($table) {
        $table->id();
        $table->string('name');
    });

    $service = app(SchemaIntrospectionService::class);

    $tables = $service->getTables();

    expect($tables)->toContain('random_table');

    Schema::dropIfExists('random_table');
});