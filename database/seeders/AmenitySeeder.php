<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<40;$i++){

            DB::table('amenities')->insert([
                'title' => "amenity".$i,
                'img' =>'damac.jpg',
            ]);
        }
    }
}
