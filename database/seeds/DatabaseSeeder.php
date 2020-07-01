<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsTableSeeder::class);
         $this->call(AdminTableSeeder::class);
         factory(\App\User::class, 5)->create();
         factory(\App\Post::class, 10)->create();
         $this->call(PagesTableSeeder::class);
         $this->call(FaqTableSeeder::class);
         $this->call(TestimonyTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(OrderTableSeeder::class);
    }
}
