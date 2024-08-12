<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 4; $i++) {
            $teacher = Teacher::create([
                'name' => fake()->name(),
                "school_id" => fake()->randomElement(School::pluck('id')->toArray()),
                'nip' => fake()->randomNumber(),
                'phone' => fake()->phoneNumber(),
            ]);
        }

        $teacher_datas = Teacher::all();

        foreach ($teacher_datas as $teacher_data) {
            $user_teacher =  User::create([
                'name' => $teacher_data->name,
                'email' => fake()->email(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
            ]);
            $user_teacher->assignRole('teacher');
        }
    }
}
