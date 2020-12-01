<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dummy data for Seo Setting
        DB::table('seo_settings')->insert([
            'description' => "Bailie's  Burgers is an Saint Lucian multinational chain of hamburger fast food restaurants. Headquartered in George Town, Veiux-Fort, the company was founded in 1987 as Insta-Bailies Burger, a Jacksonville, Castries–based restaurant chain.",
            'keywords' => "Burger, Local Burger, Billy's Burgers, Fast food, Salads, Best Burgers in Town ",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
