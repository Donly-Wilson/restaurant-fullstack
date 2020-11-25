<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        //Created user Role
        DB::table('roles')->insert([
            'title' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'title' => 'Employee',
        ]);

        //assigned user a Role
        DB::table('roles_user')->insert([
            'role_id' => '1',
            'user_id' => '1',
        ]);

        DB::table('roles_user')->insert([
            'role_id' => '2',
            'user_id' => '2',
        ]);
    }
}
