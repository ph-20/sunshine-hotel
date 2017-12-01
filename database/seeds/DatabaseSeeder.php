<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PromotionTableSeeder::class);
        $this->call(BookingTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(RoomTypesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(BookRoomsTableSeeder::class);
        $this->call(BookRoomServicesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
    }
}
