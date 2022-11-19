<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Project_statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('project_statuses')->insert([
            'title' => "Under construction",
        ]);
        DB::table('project_statuses')->insert([
            'title' => "Ready to move in ",
        ]);
        DB::table('project_statuses')->insert([
            'title' => "Completed",
        ]);
    }
}
