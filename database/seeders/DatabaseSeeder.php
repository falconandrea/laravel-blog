<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        Category::truncate();
        User::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create(
            [
                'name' => 'Personal',
                'slug' => 'personal',
            ]
        );
        $work     = Category::create(
            [
                'name' => 'Work',
                'slug' => 'work',
            ]
        );
        $test     = Category::create(
            [
                'name' => 'For test',
                'slug' => 'for-test',
            ]
        );

        Post::create(
            [
                'user_id'     => $user->id,
                'category_id' => $work->id,
                'title'       => 'My first post',
                'slug'        => 'my-first-post',
                'subtitle'    => 'Lorem ipsum dolar sit amet.',
                'description' => '<p>Lorem ipsum dolar sit amet. Lorem ipsum dolar sit amet. Lorem ipsum dolar sit amet.</p>',
            ]
        );

        Post::create(
            [
                'user_id'     => $user->id,
                'category_id' => $personal->id,
                'title'       => 'My work post',
                'slug'        => 'my-work-post',
                'subtitle'    => 'Lorem ipsum dolar sit amet.',
                'description' => '<p>Lorem ipsum dolar sit amet. Lorem ipsum dolar sit amet. Lorem ipsum dolar sit amet.</p>',
            ]
        );
    }
}
