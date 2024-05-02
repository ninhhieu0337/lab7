<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserFavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_favorites')->insert([
            'user_id' => 1,
            'favorite_id' => 1
        ]);

        DB::table('user_favorites')->insert([
            'user_id' => 1,
            'favorite_id' => 2
        ]);
    }
}
