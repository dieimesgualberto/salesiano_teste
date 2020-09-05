<?php

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
            'name' => 'dieimesgualberto',
            'email' => 'dieimesgualberto@gmail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
