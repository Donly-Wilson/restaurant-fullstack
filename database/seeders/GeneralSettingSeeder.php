<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dummy data for General Setting
        DB::table('general_settings')->insert([
            'site_title' => "Bailie's  Burgers",
            'logo_image_url' => './img/restaurant-logo.png',
            'address_1' => '234 Main st',
            'address_2' => '',
            'city' => 'Gros Islet',
            'state' => 'Rodney Bay',
            'zipcode' => '11747',
            'phone_number' => "718-219-8652",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
