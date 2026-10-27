<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'schedule_name' => $this->faker->sentence(),
            'schedule_date' => $this->faker->date(),
            'schedule_description' => $this->faker->paragraph(),
        ];
    }
}
