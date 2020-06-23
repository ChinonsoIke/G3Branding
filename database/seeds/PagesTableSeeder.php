<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageOne = new \App\Page();
        $pageOne->title = 'About Us';
        $pageOne->slug = 'about-us';
        $pageOne->content = 'This is the about us content';
        $pageOne->save();

        $pageTwo = new \App\Page();
        $pageTwo->title = 'Privacy and Policy';
        $pageTwo->slug = 'privacy-policy';
        $pageTwo->content = 'This is the Privacy and Policy content';
        $pageTwo->save();
    }
}
