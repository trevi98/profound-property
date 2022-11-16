<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert([
            'title' => "Apartment",
            'show' =>true
        ]);
        DB::table('types')->insert([
            'title' => "Villa",
            'show' =>true
        ]);
        DB::table('types')->insert([
            'title' => "Duplex",
            'show' =>true
        ]);
        DB::table('types')->insert([
            'title' => "Plot",
            'show' =>true
        ]);
    }
}
