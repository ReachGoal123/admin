<?php

namespace Mrzeta\Admin\Seeders;

use Illuminate\Database\Seeder;
use Mrzeta\Trusty\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'Administrator',
            'slug' => 'admin',
        ]);

        Role::create([
            'name' => 'User',
            'slug' => 'user',
        ]);
    }
}
