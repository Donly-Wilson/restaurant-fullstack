<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dummy data for Seo Setting
        DB::table('social_settings')->insert([
            'facebook_url' => 'https://www.facebook.com/burgerking/',
            'twitter_url' => 'https://www.twiter.com/BurgerKing',
            'instagram_url' => 'https://www.instagram.com/burgerking',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
