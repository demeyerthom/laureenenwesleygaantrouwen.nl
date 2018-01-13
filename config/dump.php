<?php

return [
    'file' => storage_path('app/dumps/database.sql'),

    'database' => env('DB_DATABASE'),
    'username' => env('DB_USERNAME'),
    'password' => env('DB_PASSWORD'),

    'includeTables' => [
        'categories',
        'data_rows',
        'data_types',
        'menu_items',
        'menus',
        'pages',
        'permission_groups',
        'permission_role',
        'permissions',
        'posts',
        'roles',
        'settings',
        'translations'
    ],
    'extraOptions' => [

    ]
];