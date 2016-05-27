<?php

return [
    'prefix' => 'admin',
    'filter' => [
        'auth' => [
            Mrzeta\Admin\Middleware\Authenticate::class,
            Mrzeta\Admin\Middleware\OnlyAdmin::class
        ],
        'guest' => Mrzeta\Admin\Middleware\RedirectIfAuthenticated::class,
    ],
    'views' => [
        'layout' => 'admin::layouts.master',
        'post' => 'admin::article'
    ],
    'article' => [
        'model' => 'Mrzeta\Admin\Entities\Article',
        'perpage' => 10
    ],
    'page' => [
        'perpage' => 10
    ],
    'user' => [
        'model' => 'Mrzeta\Admin\Entities\User',
        'perpage' => 10
    ],
    'role' => [
        'model' => 'Mrzeta\Admin\Entities\Role',
        'perpage' => 10
    ],
    'permission' => [
        'model' => 'Mrzeta\Admin\Entities\Permission',
        'perpage' => 10
    ],
    'category' => [
        'model' => 'Mrzeta\Admin\Entities\Category',
        'perpage' => 10
    ],
];
