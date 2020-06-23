<?php

use Illuminate\Database\Seeder;

class TestimonyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonyOne = new App\Testimony();
        $testimonyOne->caption = 'Caption one';
        $testimonyOne->testimony = 'Excellent service';
        $testimonyOne->fullname = 'Abdurrazaq Ogunlade';
        $testimonyOne->save();

        $testimonyTwo = new App\Testimony();
        $testimonyTwo->caption = 'Caption two';
        $testimonyTwo->testimony = 'The best application ever';
        $testimonyTwo->fullname = 'White Example';
        $testimonyTwo->save();
    }
}
