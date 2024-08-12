<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 5; $i++) {
            School::create([
                'name' => fake()->name(),
                'address' => fake()->address(),
                'headmaster' => fake()->name(),
            ]);
        }

        for ($i = 1; $i < 5; $i++) {
            $headmaster = User::create([
                'name' => fake()->randomElement(School::pluck('headmaster')->toArray()),
                'email' => fake()->email(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
            ]);
            $headmaster->assignRole('headmaster');
        }
    }
}
