<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['email' => 'hoang304@gmail.com', 'first_name' => 'hoàng', 'last_name' => 'hữu', 'password' => bcrypt('123456'),
                'phone_number' => '0123456789', 'address' => '11 Hùng Vương, Đà Nẵng', 'role' => '0', 'remember_token' => '1'],
            ['email' => 'thinh@gmail.com', 'first_name' => 'thịnh', 'last_name' => 'nguyễn', 'password' => bcrypt('123456'),
                'phone_number' => '0123456789', 'address' => '22 Hùng Vương, Đà Nẵng', 'role' => '0', 'remember_token' => '1'],
            ['email' => 'hoang123@gmail.com', 'first_name' => 'hoàng', 'last_name' => 'hữu', 'password' => bcrypt('123456'),
                'phone_number' => '0123456789', 'address' => '33 Hùng Vương, Đà Nẵng', 'role' => '1', 'remember_token' => '1'],
            ['email' => 'thinh123@gmail.com', 'first_name' => 'thịnh', 'last_name' => 'nguyễn', 'password' => bcrypt('123456'),
                'phone_number' => '0123456789', 'address' => '44 Hùng Vương, Đà Nẵng', 'role' => '1', 'remember_token' => '1']
        ]);
    }
}
