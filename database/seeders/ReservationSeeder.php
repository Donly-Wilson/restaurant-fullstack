<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('reservations')->insert([
            'fname' => 'Benjamin',
            'lname' => 'Mendy',
            'email' => 'bmendy@gmail.com',
            'phone_number' => 12345678,
            'guest_total' => '4',
            'time' => '6',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reservations')->insert([
            'fname' => 'Kathrine',
            'lname' => 'Willie',
            'email' => 'Kath@gmail.com',
            'phone_number' => 12345678,
            'guest_total' => '2',
            'time' => '9',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
