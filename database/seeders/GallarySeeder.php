<?php

namespace Database\Seeders;

use App\Models\Gallary;
use Illuminate\Database\Seeder;

class GallarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallary::factory(10)->create();

    }
}
