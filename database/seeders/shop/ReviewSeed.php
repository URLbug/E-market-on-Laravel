<?php

namespace Database\Seeders\shop;

use App\Models\shop\Review;
use Illuminate\Database\Seeder;

class ReviewSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::factory()->count(10)->create();
    }
}
