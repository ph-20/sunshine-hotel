<?php

use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            ['check_in' => '2017/11/30', 'check_out' => '2017/12/05', 'status' => '1',
                'code' => '54321', 'total' => '15000000', 'user_id' => '2', 'promotion_id' => '1'],
            ['check_in' => '2017/11/30', 'check_out' => '2017/12/05', 'status' => '2',
                'code' => '65432', 'total' => '15000000', 'user_id' => '3', 'promotion_id' => '1'],
            ['check_in' => '2017/11/30', 'check_out' => '2017/12/05', 'status' => '1',
                'code' => '76543', 'total' => '15000000', 'user_id' => '4', 'promotion_id' => '1'],
            ['check_in' => '2017/11/30', 'check_out' => '2017/12/05', 'status' => '3',
                'code' => '87654', 'total' => '15000000', 'user_id' => '5', 'promotion_id' => '1']
        ]);
    }
}