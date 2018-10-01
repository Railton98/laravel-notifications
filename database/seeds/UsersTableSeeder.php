<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Railton Leal',
            'email'     => 'railtonleal98@gmail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
