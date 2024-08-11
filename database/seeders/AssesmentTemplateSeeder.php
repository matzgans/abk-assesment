<?php

namespace Database\Seeders;

use App\Models\AssesmentTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssesmentTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $value = ["0", "1"];
        for ($i = 0; $i < 5; $i++) {
            AssesmentTemplate::create([
                'title' => fake()->title(),
                "subtitle" => fake()->title(),
                "standart_value" => fake()->randomElement($value),
            ]);
        }
    }
}
