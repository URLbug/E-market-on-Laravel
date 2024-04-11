<?php

namespace Database\Seeders\user;

use App\Models\user\Order;
use Illuminate\Database\Seeder;

class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory()->count(10)->create();
    }
}
