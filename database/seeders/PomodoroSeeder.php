<?php

namespace Database\Seeders;

use App\Models\Pomodoro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PomodoroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pomodoro::factory(5)->create();
    }
}
