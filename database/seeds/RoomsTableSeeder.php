<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            ['name' => 'Room 901', 'price' => '12000000', 'status' => '2',
                'description' => 'VIP for 2 people', 'amount_people' => '2', 'image1' => 'abc.jpg', 'room_type_id' => '1'],
            ['name' => 'Room 902', 'price' => '12000000', 'status' => '2',
                'description' => 'VIP for 2 people', 'amount_people' => '2', 'image1' => 'abc.jpg', 'room_type_id' => '1'],
            ['name' => 'Room 903', 'price' => '14000000', 'status' => '2',
                'description' => 'VIP for 4 people', 'amount_people' => '4', 'image1' => 'abc.jpg', 'room_type_id' => '1'],
            ['name' => 'Room 904', 'price' => '14000000', 'status' => '2',
                'description' => 'VIP for 4 people', 'amount_people' => '4', 'image1' => 'abc.jpg', 'room_type_id' => '1'],
            ['name' => 'Room 905', 'price' => '16000000', 'status' => '2',
                'description' => 'VIP for 6 people', 'amount_people' => '6', 'image1' => 'abc.jpg', 'room_type_id' => '1'],
            ['name' => 'Room 906', 'price' => '16000000', 'status' => '2',
                'description' => 'VIP for 6 people', 'amount_people' => '6', 'image1' => 'abc.jpg', 'room_type_id' => '1'],
            ['name' => 'Room 801', 'price' => '10000000', 'status' => '2',
                'description' => 'Deluxe for 2 people', 'amount_people' => '2', 'image1' => 'abc.jpg', 'room_type_id' => '2'],
            ['name' => 'Room 802', 'price' => '10000000', 'status' => '2',
                'description' => 'Deluxe for 2 people', 'amount_people' => '2', 'image1' => 'abc.jpg', 'room_type_id' => '2'],
            ['name' => 'Room 803', 'price' => '11000000', 'status' => '2',
                'description' => 'Deluxe for 4 people', 'amount_people' => '4', 'image1' => 'abc.jpg', 'room_type_id' => '2'],
            ['name' => 'Room 804', 'price' => '11000000', 'status' => '2',
                'description' => 'Deluxe for 4 people', 'amount_people' => '4', 'image1' => 'abc.jpg', 'room_type_id' => '2'],
            ['name' => 'Room 805', 'price' => '12000000', 'status' => '2',
                'description' => 'Deluxe for 6 people', 'amount_people' => '6', 'image1' => 'abc.jpg', 'room_type_id' => '2'],
            ['name' => 'Room 806', 'price' => '12000000', 'status' => '2',
                'description' => 'Deluxe for 6 people', 'amount_people' => '6', 'image1' => 'abc.jpg', 'room_type_id' => '2'],
            ['name' => 'Room 701', 'price' => '10000000', 'status' => '2',
                'description' => 'Family for 2 people', 'amount_people' => '2', 'image1' => 'abc.jpg', 'room_type_id' => '3'],
            ['name' => 'Room 702', 'price' => '10000000', 'status' => '2',
                'description' => 'Family for 2 people', 'amount_people' => '2', 'image1' => 'abc.jpg', 'room_type_id' => '3'],
            ['name' => 'Room 703', 'price' => '12000000', 'status' => '2',
                'description' => 'Family for 4 people', 'amount_people' => '4', 'image1' => 'abc.jpg', 'room_type_id' => '3'],
            ['name' => 'Room 704', 'price' => '12000000', 'status' => '2',
                'description' => 'Family for 4 people', 'amount_people' => '4', 'image1' => 'abc.jpg', 'room_type_id' => '3'],
            ['name' => 'Room 705', 'price' => '14000000', 'status' => '2',
                'description' => 'Family for 6 people', 'amount_people' => '6', 'image1' => 'abc.jpg', 'room_type_id' => '3'],
            ['name' => 'Room 706', 'price' => '14000000', 'status' => '2',
                'description' => 'Family for 6 people', 'amount_people' => '6', 'image1' => 'abc.jpg', 'room_type_id' => '3']
        ]);
    }
}
