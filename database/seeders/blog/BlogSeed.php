<?php

namespace Database\Seeders\blog;

use App\Models\blog\Blog;
use Illuminate\Database\Seeder;

class BlogSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::factory()->count(10)->create();
    }
}
