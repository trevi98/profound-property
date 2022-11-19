<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sizes')->insert([
            'title' => "Studio",
            'size' => 0,
            'type_id' => 1,
        ]);
        DB::table('sizes')->insert([
            'title' => "1 bedroom",
            'size' => 1,
            'type_id' => 1,
        ]);
        DB::table('sizes')->insert([
            'title' => "2 bedrooms",
            'size' => 2,
            'type_id' => 1,
        ]);
        DB::table('sizes')->insert([
            'title' => "3 bedrooms",
            'size' => 3,
            'type_id' => 1,
        ]);
    }
}
