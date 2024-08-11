<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 4; $i++) {
            Teacher::create([
                'name' => fake()->name(),
                'nip' => fake()->randomNumber(),
                'phone' => fake()->phoneNumber()
            ]);
            # code...
        }
    }
}
