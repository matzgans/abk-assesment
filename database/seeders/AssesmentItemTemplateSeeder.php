<?php

namespace Database\Seeders;

use App\Models\AssesmentItemTemplate;
use App\Models\AssesmentTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssesmentItemTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 10; $i++) {
            AssesmentItemTemplate::create([
                'assesment_template_id' => fake()->randomElement(AssesmentTemplate::pluck('id')->toArray()),
                'assesment' => fake()->title(),
            ]);
        }
    }
}
