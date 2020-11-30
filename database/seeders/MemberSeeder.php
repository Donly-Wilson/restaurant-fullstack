<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Create dummy for offers table
        DB::table('members')->insert([
            'fname' => 'Ramsey',
            'lname' => 'Jordan',
            'email' => 'rj@gmail.com',
            'phone_number' => 12345678,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
