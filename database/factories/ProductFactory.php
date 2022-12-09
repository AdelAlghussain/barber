<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'price' => $this->faker->numberBetween(18,60),
            'product_photo_path' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
