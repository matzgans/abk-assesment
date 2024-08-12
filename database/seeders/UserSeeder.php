<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add Admin
        $admin = User::create([
            'name' => 'Dinas Pendidikan Bonebolango',
            'email' => 'dikbudbonbol@gmail.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(60),
        ]);
        $admin->assignRole('admin');
    }
}
