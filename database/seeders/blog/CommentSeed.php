<?php

namespace Database\Seeders\blog;

use App\Models\blog\Comment;
use Illuminate\Database\Seeder;

class CommentSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::factory()->count(10)->create();
    }
}
