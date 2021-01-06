<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuicknoteTodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quicknotes_todo')->insert([
            'title' => Str::random(10),
            'description' => Str::random(20),
        ]);

        DB::table('quicknotes_todo')->insert([
            'title' => Str::random(10),
            'description' => Str::random(20),
        ]);

        DB::table('quicknotes_todo')->insert([
            'title' => Str::random(10),
            'description' => Str::random(20),
        ]);

        DB::table('quicknotes_todo')->insert([
            'title' => Str::random(10),
            'description' => Str::random(20),
        ]);

        DB::table('quicknotes_todo')->insert([
            'title' => Str::random(10),
            'description' => Str::random(20),
        ]);

        DB::table('quicknotes_todo')->insert([
            'title' => Str::random(10),
            'description' => Str::random(20),
        ]);
    }
}
