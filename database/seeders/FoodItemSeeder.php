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
        // dummy data for Starter Menu
        DB::table('food_items')->insert([
            'title' => "Baked Buckwheat Pancake",
            'description' => '
            blueberry compote, maple syrup (allow 20 min)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 13.00,
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Hand Cut Frites",
            'description' => 'garlic aioli',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 12.00,
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Heirloom Tomato & Cucumber",
            'description' => 'pickled red onion, basil, frisée, citrus vinaigrette',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 18.00,
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Charred Garlic Shrimp",
            'description' => 'tomato sofrito, grilled sourdough, basil, evoo',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 15.00,
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Beef Short Rib Hash",
            'description' => 'two eggs, braised beef, yukon potato & pickled chili salsa verde',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 14.00,
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        


        // dummy data for Burger Menu
        DB::table('food_items')->insert([
            'title' => 'Double Cheesebuger Meal',
            'description' => '
            onion-peeled and finely chopped,
            British Beef Steak Mince 15% fat,
            mixed dried herbs,
            4 slices mature Cheddar ,
            4 white rolls,
            few round lettuce leaves torn,
            2  tomato, sliced
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
            Chicken striped bbq smoked,
            mixed dried herbs,
            2 slices mature Cheddar (optional),
            2 white rolls,
            few round lettuce leaves torn,
            1 tomato, sliced
            ketchup, to serve (optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "Ballie's Grilled Club",
            'description' => '
            marinated chicken breast, tomato, lettuce, bacon, avocado, brioche bread',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 22.00,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Royal Cheese Burger",
            'description' => '
            smoked bacon, white cheddar, sour pickle, tomato, royal sauce, and sesame seed bun',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 24.00,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Baguette & Cheese",
            'description' => '
            local brie, quince paste and chutney,tuna(optional)',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 7.00,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        // dummy data for Entrees Menu
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
            'title' => "Wings and Fingers",
            'description' => "
            tossed in signature hot 'n' honey sauce, maple rye bbq sauce, crudités + ranch, hand cut frites",
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 26.00,
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Chilled SeaFood",
            'description' => "
            poached prawns with cocktail and green goddess sauce; shucked east coast oysters on the half shell with mignonette and lemons",
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 25.00,
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "6OZ Canadian Tenderloin",
            'description' => "
            fingerling potato, seasonal vegetables, red wine jus",
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 25.00,
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "Chicken Supreme",
            'description' => "
            crushed new potato, seasonal vegetables, chicken jus",
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 25.00,
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => "Pan Seared Salmon",
            'description' => "
            farro pilaf, swiss chard, carrot puree, chimichurri",
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 20.00,
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        // dummy data for Slides Menu
        DB::table('food_items')->insert([
            'title' => "Cesar Salad",
            'description' => '
            double smoked bacon, pecorino, caesar dressing, crouton, lemon',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 12.00,
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Nicoise Salad",
            'description' => '
            albacore tuna, egg, tomato, olives, fingerling potato, baby greens, sherry vinaigrette',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 12.99,
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Crudité & Pickled Things",
            'description' => '
            heirloom carrots, celery, radishes, pickles, olives, peppers, green goddess sauce',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 12.99,
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Cashew Pesto Orecchiette",
            'description' => '
            sweet peas, arugula, asparagus, basil, lemon',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 10.00,
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        // dummy data for Deserts Menu
        DB::table('food_items')->insert([
            'title' => "Tres Leche Cup Cakes",
            'description' => 'pure vanilla extract,Whole milk,granulated sugar',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 4.99,
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Basque Cheesecake",
            'description' => 'cherry compote, yogurt cremeux, puffed wild rice',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 8.50,
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Warm Molten Chocolate Cake",
            'description' => 'hazelnut ganache, salted caramel sauce',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 10.00,
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Sticky Toffee Pudding",
            'description' => 'cookie crumble, toffee sauce',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 4.99,
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        // dummy data for Drinks Menu
        DB::table('food_items')->insert([
            'title' => "Still & Sparkling Water",
            'description' => '11 oz $3.00,
             33 oz $5.50',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 3.00,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Coke / Sprite",
            'description' => '',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 2.50,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "Chai Latte",
            'description' => 'With organic whole milk',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 4.50,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "La Croix Grapefruit",
            'description' => '12 oz',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 2.25,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => "Coconut Water",
            'description' => '9.5 oz',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 4.00,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Hot Tea",
            'description' => 'Tumeric Tonic | Chamomile | Emerald Green | Breakfast | Earl Grey',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 3.25,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => "Filter Coffee Tea",
            'description' => 'Oat Milk + $0.50
            Almond Milk + $0.50',
            'image_url' => './img/hambuger-and-fries.png',
            'price' => 3.50,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
