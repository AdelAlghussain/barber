<?php

namespace Database\Seeders;

use App\Models\Empolyee;
use Illuminate\Database\Seeder;

class EmpolyeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empolyee::factory(10)->create();

    }
}
