<?php

namespace Mrzeta\Admin\Seeders;

use Illuminate\Database\Seeder;
use Mrzeta\Admin\Entities\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'email' => 'admin@meetrue.com',
            'password' => 'suprise',
        ]);

        $user->addRole(1);
    }
}
