<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\blog\BlogSeed;
use Database\Seeders\blog\CommentSeed;
use Database\Seeders\shop\ProductSeed;
use Database\Seeders\shop\ReviewSeed;
use Database\Seeders\user\OrderSeed;
use Database\Seeders\user\SubscribeSeed;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SubscribeSeed::class,
            UserSeed::class,
            ReviewSeed::class,
            ProductSeed::class,
            OrderSeed::class,
            CommentSeed::class,
            BlogSeed::class,
        ]);
    }
}
