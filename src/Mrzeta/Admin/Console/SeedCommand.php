<?php

namespace Mrzeta\Admin\Console;

use Illuminate\Console\Command;

class SeedCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'admin:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the seeders from mrzeta/admin package';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $this->call('db:seed', ['--class' => 'Mrzeta\\Admin\\Seeders\\AdminDatabaseSeeder']);
    }
}
