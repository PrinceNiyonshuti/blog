<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // truncate the tables
        User::truncate();
        Post::truncate();
        Category::truncate();

        // Altenative way after creating each factory for model
        // Post::factory()->create();

        $user = User::factory()->create([
            'name'=>'John Doe',
        ]);

        Post::factory(5)->create(
            [
                'user_id'=> $user->id,
            ]
        );

    }
}
