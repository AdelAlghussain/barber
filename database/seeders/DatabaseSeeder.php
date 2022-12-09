<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        $this->call(CommentSeeder::class);
        $this->call(EmpolyeeSeeder::class);
        $this->call(GallarySeeder::class);
        $this->call(ResultSeeder::class);
        $this->call(WorktimeSeeder::class);
        $this->call(OfferSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
