<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; //built in faker library generator to fake data

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create dummy data for reservation table
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('reservations')->insert([
                'fname' => $faker->FirstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'guest_total' => rand(1, 5),
                'time' => rand(6, 10),
                'created_at' => $faker->dateTimeThisMonth,
                'updated_at' => $faker->dateTimeThisMonth,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ]);
        }

        // DB::table('reservations')->insert([
        //     'fname' => 'Benjamin',
        //     'lname' => 'Mendy',
        //     'email' => 'bmendy@gmail.com',
        //     'phone_number' => 12345678,
        //     'guest_total' => '4',
        //     'time' => '6',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
