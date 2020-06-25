<?php

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqOne = new \App\Faq();
        $faqOne->title = 'What\'s your thought about this Website?';
        $faqOne->content = 'I love this website alot';
        $faqOne->save();

        $faqTwo = new \App\Faq();
        $faqTwo->title = 'How do I become a member of this website';
        $faqTwo->content = 'Go to register, fill all the required fields, click then click on the register button';
        $faqTwo->save();
    }
}
