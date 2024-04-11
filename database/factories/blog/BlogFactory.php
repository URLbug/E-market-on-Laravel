<?php

namespace Database\Factories\blog;

use App\Models\blog\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $picture = [
            'assets/images/blog/blog-01.jpg',
            'assets/images/blog/blog-02.jpg',
            'assets/images/blog/blog-03.jpg',
            'assets/images/blog/blog-04.jpg',
        ];

        $comments_id = [];

        $comment_id = Comment::query()->get('id');

        foreach($comment_id as $comment)
        {
            $comments_id[] = $comment->id;
        }

        return [
            'name' => fake()->word(),
            'picture' => $picture[array_rand($picture)],
            'description' => fake()->text(900),
            'comments_id' => $comments_id[array_rand($comments_id)],
        ];
    }
}
