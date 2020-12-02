<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; //built in faker library generator to fake data

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        //Create dummy for offers table
        foreach (range(1, 100) as $index) {
            DB::table('members')->insert([
                'fname' => $faker->FirstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'created_at' => $faker->dateTimeThisMonth,
                'updated_at' => $faker->dateTimeThisMonth,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ]);
        }
    }
}
