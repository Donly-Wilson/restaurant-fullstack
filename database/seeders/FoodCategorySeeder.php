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
            'description' => 'There’s no need to stress; we’ve got you covered on the starter front. Be it a colourful Greek mezze platter, a classic ham hock terrine or smoked salmon crostini, our round-up of best ever starters has something in it to please everyone’s palates.',
            'image_url' => './img/chips.png',
            'image_url_webp' => './img/chips2.webp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Burger',
            'description' => 'When it comes to burgers, there’s truly something for everyone: all-beef cheeseburgers tucked into toasted buns, turkey burgers piled high with all the fixings, flavor-packed tuna burgers, meatless veggie patties and more. Select as you choose — because burgers are guaranteed to please!',
            'image_url' => './img/hamburger-and-fries.png',
            'image_url_webp' => './img/hamburger-and-fries2.webp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Entrees',
            'description' => 'Looking to feast on dinner that feels special (while also being easy and delicious.) Here are few of our favorite main course options for serving all your folks. We have roasts and braises, grilled entrées, and vegetarian main dish recipes, too. Now all you need to think about is dessert...',
            'image_url' => './img/pork-steak.png',
            'image_url_webp' => './img/pork-steak2.webp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Slides',
            'description' => "From classic BBQ faves like macaroni and pasta salad to healthier options like fresh Greek salad and a watermelon feta mix, we've got something for every craving and mood. On a diet? Say less, our salads are very light to the stomach while remaining well proportioned.",
            'image_url' => './img/salad.png',
            'image_url_webp' => './img/salad2.webp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Deserts',
            'description' => 'Baking is an exact science. So, when it comes to desserts there’s nothing more valuable than a collection of tried-and-true recipes. Ones you can count on. Ones that have been tested, re-tested and perfected — like these ones. That’s why we’re proud to call them our "Bests"',
            'image_url' => './img/cupcake.png',
            'image_url_webp' => './img/cupcake2.webp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Drinks',
            'description' => 'Apart from water being the best to quench your thirst our beverages come in an immediate second.From canonical classics to obscure tiki drinks,tea and coffee we offer it all. Now all That’s missing is our juicy burgers as a tag along.',
            'image_url' => './img/drinks.png',
            'image_url_webp' => './img/drinks2.webp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
