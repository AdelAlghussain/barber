<?php

namespace Database\Seeders;

use App\Models\Worktime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorktimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('worktimes')->insert([
            [
                'day' => 'Mo',
                'start_time' => '10:00',
                'close_time' => '19:00',
            ],
            [
                'day' => 'Di',
                'start_time' => '10:00',
                'close_time' => '19:00',
            ],
            [
                'day' => 'Mi',
                'start_time' => '10:00',
                'close_time' => '19:00',
            ],
            [
                'day' => 'Do',
                'start_time' => '10:00',
                'close_time' => '19:00',
            ],
            [
                'day' => 'Fr',
                'start_time' => '10:00',
                'close_time' => '19:00',
            ],
            [
                'day' => 'Sa',
                'start_time' => '09:00',
                'close_time' => '17:00',
            ],
            [
                'day' => 'So',
                'start_time' => '',
                'close_time' => '',
            ]
        ]);
    }
}
