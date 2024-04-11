<?php

namespace Database\Factories\shop;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users_id = [];

        $user_id = User::query()->get('id');

        foreach($user_id as $user)
        {
            $users_id[] = $user->id;
        }

        return [
            'users_id' => $users_id[array_rand($users_id)],
            'description' => fake()->text(500),
            'rating' => random_int(1, 5),
        ];
    }
}
