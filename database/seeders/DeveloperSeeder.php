<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('developers')->insert([
            'title' => "Damac",
            'cover' =>'damac.jpg',
            'about' => 'about'
        ]);
        DB::table('developers')->insert([
            'title' => "Emaar",
            'cover' =>'emaar.png',
            'about' => 'about'
        ]);
    }
}
