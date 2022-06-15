<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('timeslots')->insert([
            /**Time-slots for a treatment*/
            ['start_time' => '10:00', 'end_time' => '12:00', 'duration' => 120],
            ['start_time' => '10:30', 'end_time' => '12:30', 'duration' => 120],

            ['start_time' => '12:00', 'end_time' => '14:00', 'duration' => 120],
            ['start_time' => '12:30', 'end_time' => '14:30', 'duration' => 120],

            ['start_time' => '14:00', 'end_time' => '16:00', 'duration' => 120],
            ['start_time' => '14:30', 'end_time' => '16:30', 'duration' => 120],

            ['start_time' => '16:00', 'end_time' => '18:00', 'duration' => 120],
            ['start_time' => '16:30', 'end_time' => '18:30', 'duration' => 120],

            /**Time-slots only for a haircut*/
            ['start_time' => '10:00', 'end_time' => '11:00', 'duration' => 60],
            ['start_time' => '10:30', 'end_time' => '11:30', 'duration' => 60],

            ['start_time' => '11:00', 'end_time' => '12:00', 'duration' => 60],
            ['start_time' => '11:30', 'end_time' => '12:30', 'duration' => 60],

            ['start_time' => '12:00', 'end_time' => '13:00', 'duration' => 60],
            ['start_time' => '12:30', 'end_time' => '13:30', 'duration' => 60],

            ['start_time' => '13:00', 'end_time' => '14:00', 'duration' => 60],
            ['start_time' => '13:30', 'end_time' => '14:30', 'duration' => 60],

            ['start_time' => '14:00', 'end_time' => '15:00', 'duration' => 60],
            ['start_time' => '14:30', 'end_time' => '15:30', 'duration' => 60],

            ['start_time' => '15:00', 'end_time' => '16:00', 'duration' => 60],
            ['start_time' => '15:30', 'end_time' => '16:30', 'duration' => 60],

            ['start_time' => '16:00', 'end_time' => '17:00', 'duration' => 60],
            ['start_time' => '16:30', 'end_time' => '17:30', 'duration' => 60],

            ['start_time' => '17:00', 'end_time' => '18:00', 'duration' => 60],
            ['start_time' => '17:30', 'end_time' => '18:30', 'duration' => 60],

            /**Time-slots for a haircut and treatment*/
            ['start_time' => '10:00', 'end_time' => '13:00', 'duration' => 180],
            ['start_time' => '10:30', 'end_time' => '13:30', 'duration' => 180],

            ['start_time' => '13:00', 'end_time' => '16:00', 'duration' => 180],
            ['start_time' => '13:30', 'end_time' => '16:30', 'duration' => 180],
        ]);
    }
}
