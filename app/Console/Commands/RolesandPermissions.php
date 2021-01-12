<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\DefaultRolesandPermissions;

class RolesandPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greylux:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create default role and permission';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $developerEmail = $this->ask('Enter Developer Email');
        $developerPassword = $this->secret('Enter Developer password');

        $adminEmail = $this->ask('Enter Administrator Email');
        $adminPassword = $this->secret('Enter Administrator password');

        DefaultRolesandPermissions::create($developerEmail, $developerPassword, $adminEmail, $adminPassword);

        $this->info('Greylux Default Installation successful');
    }
}
