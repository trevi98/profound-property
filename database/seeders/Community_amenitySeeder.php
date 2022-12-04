<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Community_amenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<10;$i++){

            DB::table('community_amenities')->insert([
                'title' => "cAmenity".$i,
                'img' =>'damac.jpg',
            ]);
        }
    }
}
