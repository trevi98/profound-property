<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => "admin",
            'role_id' => 1,
            'email' => 'admin@admin.com',
            'password' => '$2y$10$FK2aPbSQiA3VG7Zq4Nh8t.4YXSAOv/nSkMFHiAxNWfMHzjD1otLsK',

        ]);
        DB::table('users')->insert([
            'name' => "agent1",
            'role_id' => 2,
            'email' => 'agent1@agent.com',
            'password' => '$2y$10$FK2aPbSQiA3VG7Zq4Nh8t.4YXSAOv/nSkMFHiAxNWfMHzjD1otLsK',

        ]);
        DB::table('users')->insert([
            'name' => "agent2",
            'role_id' => 2,
            'email' => 'agent2@agent.com',
            'password' => '$2y$10$FK2aPbSQiA3VG7Zq4Nh8t.4YXSAOv/nSkMFHiAxNWfMHzjD1otLsK',

        ]);
        DB::table('users')->insert([
            'name' => "user1",
            'role_id' => 3,
            'email' => 'user1@user.com',
            'password' => '$2y$10$FK2aPbSQiA3VG7Zq4Nh8t.4YXSAOv/nSkMFHiAxNWfMHzjD1otLsK',

        ]);
        DB::table('users')->insert([
            'name' => "user2",
            'role_id' => 3,
            'email' => 'user2@user.com',
            'password' => '$2y$10$FK2aPbSQiA3VG7Zq4Nh8t.4YXSAOv/nSkMFHiAxNWfMHzjD1otLsK',

        ]);
    }
}
