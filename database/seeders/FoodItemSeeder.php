<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dummy data for buger menu
        DB::table('food_items')->insert([
            'title' => 'Double Cheesebuger Meal',
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "Bailie's Burger special",
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('food_items')->insert([
            'title' => "Chinken Wings",
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 9.99,
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('food_items')->insert([
            'title' => "Steak and Baby Ribs",
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 26.00,
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('food_items')->insert([
            'title' => "Cesar Salad",
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 12.99,
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('food_items')->insert([
            'title' => "Tres Leche Cup Cakes",
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 4.99,
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "Coke",
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 2.50,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "Sprite",
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 2.50,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "Greygoose  Shot",
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 7.99,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "Hennesy Shot",
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar (optional),
            4 white rolls,
            few round lettuce leaves torn,
            1 beef tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 7.99,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
