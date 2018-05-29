<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        	'username' => 'peserta',
        	'nama' => 'Peserta',
        	'role_id' => 3,
        	'password' => bcrypt('indonesia'),
        	'remember_token' => str_random(15),
        ]);
    }
}
