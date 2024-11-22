<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Posts;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',

            
        ]);

        Posts::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Abs',
            'location' => 'Remote',
            'email' => 'contact@abs.com',
            'website' => 'abs.com',
            'description' => 'psdovkskksvksvkldskldsnkdlsnvkdsvnklsdnvdklsnvsnv'
        ]);
    }
}
