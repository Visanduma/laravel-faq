<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Provider\File;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;
use Visanduma\LaravelFaq\Models\Faq;
use Visanduma\LaravelFaq\Models\FaqCategory;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        // create faq categories
        foreach (range(1,10) as $i){
            FaqCategory::create([
                'name' => $faker->words(4,true),
                'order' => 0
            ]);
        }

        // create faqs
        foreach (range(1,20) as $i){
            Faq::create([
                'title' => $faker->realTextBetween(15,30),
                'content' => $faker->text,
                'category_id' => $faker->numberBetween(1,10),
                'order' => 0
            ]);
        }
    }
}
