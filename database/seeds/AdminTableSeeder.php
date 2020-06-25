<?php

use Illuminate\Database\Seeder;
use App\Administrator;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminOne = new Administrator();
        $adminOne->name = 'Admin Example';
        $adminOne->email = 'admin@example.com';
        $adminOne->password = bcrypt('admin123456');
        $adminOne->save();

        $adminTwo = new Administrator();
        $adminTwo->name = 'Razaq Ogunlade';
        $adminTwo->email = 'razaqofficial@example.com';
        $adminTwo->password = bcrypt('razaq123');
        $adminTwo->save();

        $adminThree = new Administrator();
        $adminThree->name = 'White Example';
        $adminThree->email = 'white123@example.com';
        $adminThree->password = bcrypt('white123');
        $adminThree->save();

        $adminOne->assignRole('Developer');
        $adminTwo->assignRole('Super User');
        $adminThree->assignRole('Ordinary User');
    }
}
