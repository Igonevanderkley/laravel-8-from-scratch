<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::factory()->create([
            'name' => 'John Doe'
        ]);

        $user2 = User::factory()->create([
            'name' => 'Jane Doe'
        ]);
        //run post factory
        Post::factory(5)->create([
            'user_id' => $user1->id,
        ]);

        Post::factory(5)->create([
            'user_id' => $user2->id,
        ]);

    }
}
