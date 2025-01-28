<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pomodoro>
 */
class PomodoroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "timer" => 50,
            "day" => $this->faker->date(),
            "done" => true,
            "created" => $this->faker->time(),
            "id_user" => User::pluck('id')->random(),
            "id_tag" => User::pluck('id')->random()
        ];
    }
}
