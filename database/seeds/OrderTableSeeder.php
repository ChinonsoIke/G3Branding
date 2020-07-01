<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderOne =  new Order;
        $orderOne->name = 'Abdurrazaq Ogunlade';
        $orderOne->email = 'razaqofficial@hotmail.com';
        $orderOne->phone_number = '+2348186922240';
        $orderOne->street = '23, Mobolaji Bank Anthony way';
        $orderOne->city = 'Ikeja';
        $orderOne->state = 'Lagos state';
        $orderOne->quantity = '450';
        $orderOne->additional_information = 'This is an additional information about AbdurRazaq\'s order';
        $orderOne->category_id = 1;
        $orderOne->save();


    }
}
