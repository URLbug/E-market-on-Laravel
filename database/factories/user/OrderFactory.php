<?php

namespace Database\Factories\user;

use App\Models\shop\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = [
            'Order is accepted',
            'In the delivery service',
            'Arrived in your city',
            'At the point od issue',
        ];

        $users_id = [];
        $products_id = [];

        $user_id = User::query()->get('id');
        $product_id = Product::query()->get('id');

        foreach ($user_id as $user)
        {
            $users_id[] = $user->id;
        }

        foreach ($product_id as $product)
        {
            $products_id[] = $product->id;
        }

        return [
            'users_id' => $users_id[array_rand($users_id)],
            'products_id' => $products_id[array_rand($products_id)],
            'status' => $status[array_rand($status)],
            'total' => random_int(10, 1000),
            'express' => fake()->boolean(),
        ];
    }
}
