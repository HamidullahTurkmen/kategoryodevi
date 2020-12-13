<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'HamullahTurkmen',
            'email' => 'hamidullahturkmen.com',
            'password' => '123456',
        ]);
    }
}
