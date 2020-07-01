<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryOne = new Category;
        $categoryOne->title = 'Business Card';
        $categoryOne->description = 'Order one sided business cards that simply represent your business in special ways.';
        $categoryOne->image = 'business_card.png';
        $categoryOne->save();

        $categoryTwo = new Category;
        $categoryTwo->title = 'Invitation Card';
        $categoryTwo->description = 'Announce your special day with our beautiful A6 Save The Date cards. Available in laminated matte cards and shiny lux cards.';
        $categoryTwo->image = 'invitation_card.png';
        $categoryTwo->save();

        $categoryThree = new Category;
        $categoryThree->title = 'Logo Design';
        $categoryThree->description = 'Provide our graphics design team with relevant information such as your business details, preferred colour(s) and style of logo.';
        $categoryThree->save();

        $categoryOne->prices()->saveMany([
            new App\CategoryPrice(['quantity' => '100', 'cost' => 1500]),
            new App\CategoryPrice(['quantity' => '250', 'cost' => 2500]),
            new App\CategoryPrice(['quantity' => '400+', 'cost' => 4500]),
        ]);

        $categoryTwo->prices()->saveMany([
            new App\CategoryPrice(['quantity' => '150', 'cost' => 2500]),
            new App\CategoryPrice(['quantity' => '220', 'cost' => 2600]),
            new App\CategoryPrice(['quantity' => '500+', 'cost' => 5000]),
        ]);

        $categoryThree->prices()->saveMany([
            new App\CategoryPrice(['quantity' => '80', 'cost' => 700]),
            new App\CategoryPrice(['quantity' => '120', 'cost' => 1500]),
            new App\CategoryPrice(['quantity' => '300+', 'cost' => 2000]),
        ]);
    }
}


