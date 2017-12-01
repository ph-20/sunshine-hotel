<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['name' => 'Fitness Center', 'price' => '500000', 'description' => 'Trung tâm thể dục'],
            ['name' => 'Megah Spa & Massage', 'price' => '400000', 'description' => 'Trung tâm Spa và Massage'],
            ['name' => 'Phòng Karaoke', 'price' => '300000', 'description' => 'Phòng VIP karaoke diện tích 60m2'],
            ['name' => 'Bể bơi', 'price' => '200000', 'description' => 'Bể bơi nằm ở tầng thượng'],
            ['name' => 'Dịch vụ thuê xe', 'price' => '100000', 'description' => 'Dịch vụ thuê xe du lịch']
        ]);
    }
}
