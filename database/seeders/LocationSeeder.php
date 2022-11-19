<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */








    public function run()
    {
        //
        DB::table('locations')->insert([
            'title' => "Deira",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Creek",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Bur Dubai",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Jumeirah",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Sufouh",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Barsha",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Emaar Emirates Hills",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Nakheel",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Jebel Ali",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Silicon Oasis",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Academic City",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "International City",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Warqa",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Rashidiya",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Mirdif",
            'is_parent' => true,
            'is_chield' => false,
            'location_id' => null,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Garhood",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 1,
        ]);
        DB::table('locations')->insert([
            'title' => "Festival City",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 1,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Garhood",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 1,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Qusais",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 1,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Mamzar",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 2,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Waheda",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 2,
        ]);
        DB::table('locations')->insert([
            'title' => "Abu Hail",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 2,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Baraha",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 2,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Murar",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 2,
        ]);
        DB::table('locations')->insert([
            'title' => "Hyatt",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 2,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Sabkha",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 2,
        ]);
        DB::table('locations')->insert([
            'title' => "Al Ras",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 2,
        ]);
        DB::table('locations')->insert([
            'title' => "Hor Al Anz",
            'is_parent' => false,
            'is_chield' => true,
            'location_id' => 2,
        ]);
    }
}
