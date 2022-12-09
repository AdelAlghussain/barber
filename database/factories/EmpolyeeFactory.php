<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpolyeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'age' => $this->faker->numberBetween(18,60),
            'experience' => $this->faker->numberBetween(1,40),
            'profile_photo_path' => $this->faker->imageUrl(),
            'location' => $this->faker->address(),
            'description' => $this->faker->paragraph(),
            'twitter' => $this->faker->url(),
            'facbook' => $this->faker->url(),
        ];
    }
}
