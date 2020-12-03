<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dummy data for each food category
        DB::table('food_categories')->insert([
            'title' => 'Starters',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem. Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi? Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?',
            'image_url' => './img/chips.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Burger',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem. Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi? Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?',
            'image_url' => './img/hamburger-and-fries.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Entrees',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem. Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi? Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?',
            'image_url' => './img/pork-steak.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Slides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem. Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi? Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?',
            'image_url' => './img/salad.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Deserts',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem. Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi? Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?',
            'image_url' => './img/cupcake.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Drinks',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem. Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi? Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?',
            'image_url' => './img/drinks.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
