<?php

namespace App\Console\Commands;

use App\Administrator;
use Illuminate\Console\Command;

class RolesAndPermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        \DB::table('roles')->delete();
        \DB::table('permissions')->delete();
        \Artisan::call('db:seed --class=RolesAndPermissionsTableSeeder');

        /*
        |---------------------------------------------------
        | CHECK AdminTableSeeder Class for more information
        |---------------------------------------------------
        |*/

        $adminOne = Administrator::find(1);
        $adminOne->assignRole('Developer');
        $this->line('Permission synchronized successfully.');
        $this->line("{$adminOne->name} has been assigned a Developer role");

        $adminTwo = Administrator::find(2);
        $adminTwo->assignRole('Super User');
        $this->line('Permission synchronized successfully.');
        $this->line("{$adminTwo->name} has been assigned a Super User role");

        $adminThree = Administrator::find(3);
        $adminThree->assignRole('Ordinary User');
        $this->line('Permission synchronized successfully.');
        $this->line("{$adminThree->name} has been assigned a Ordinary User role");
    }
}
