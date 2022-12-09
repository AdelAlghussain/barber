<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorktimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'day' => $this->faker->dayOfWeek(),
            'start_time' => $this->faker->time(),
            'close_time' => $this->faker->time(),

        ];
    }
}
