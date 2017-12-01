<?php

use Illuminate\Database\Seeder;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            ['code' => '234', 'discount' => '10', 'start_date' => '2017/12/10', 'end_date' => '2018/12/20'],
            ['code' => '345', 'discount' => '20', 'start_date' => '2017/12/10', 'end_date' => '2018/12/20'],
            ['code' => '456', 'discount' => '10', 'start_date' => '2017/12/10', 'end_date' => '2018/12/20']
        ]);
    }
}
