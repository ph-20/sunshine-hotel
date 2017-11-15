<?php

use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            [
                'name' => 'VIP',
                'description' => 'Phòng Vip'
            ],
            [
                'name' => 'Deluxe',
                'description' => 'Phòng Deluxe'
            ],
            [
                'name' => 'Family',
                'description' => 'Phòng Family'
            ]
        ]);
    }
}
