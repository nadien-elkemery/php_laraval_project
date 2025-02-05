<?php

return [

    // Paths for loading views
    'view_directories' => [
        base_path('resources/templates'),
    ],

    // Location to store compiled views
    'compiled_directory' => env(
        'TEMPLATE_CACHE_DIRECTORY',
        realpath(storage_path('framework/templates_cache'))
    ),

];
