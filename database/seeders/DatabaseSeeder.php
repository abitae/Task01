<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Task::factory(100)->create();
        $user = User::create([
            'name' => 'Abel Arana',
            'email' => 'abel.arana@hotmail.com',
            'password' => bcrypt('lobomalo123'),
        ]);
    }
}
