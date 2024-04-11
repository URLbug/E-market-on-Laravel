<?php

namespace Database\Seeders\user;

use App\Models\user\Subscribe;
use Illuminate\Database\Seeder;

class SubscribeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscribe::factory()->count(10)->create();
    }
}
