<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //This creates the dummy data for website
        $this->call([
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            FoodCategorySeeder::class,
            FoodItemSeeder::class,
            MemberSeeder::class,
            ReservationSeeder::class,
            GeneralSettingSeeder::class,
            SeoSettingSeeder::class,
            SocialSettingSeeder::class,
        ]);
    }
}
