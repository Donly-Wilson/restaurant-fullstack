<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker; //built in faker library generator to fake data

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Assign dummy Roles for users with in UsersTableSeeder
        DB::table('roles')->insert([
            'title' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'title' => 'Employee',
        ]);

        //assigned user a Role
        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '1',
        ]);

        DB::table('role_user')->insert([
            'role_id' => '2',
            'user_id' => '2',
        ]);

        $faker = Faker::create();
        foreach (range(3, 20) as $index) {
            DB::table('role_user')->insert([
                'role_id' => rand(1, 2),
                'user_id' => $index,
            ]);
        }
    }
}
