<?php

use Illuminate\Database\Seeder;

class BookRoomServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_room_services')->insert([
            ['unit' => '1', 'book_room_id' => '1', 'service_id' => '1'],
            ['unit' => '1', 'book_room_id' => '2', 'service_id' => '1'],
            ['unit' => '1', 'book_room_id' => '3', 'service_id' => '1'],
            ['unit' => '1', 'book_room_id' => '4', 'service_id' => '1']
        ]);
    }
}
