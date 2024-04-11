<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $payMethod = [
            'PayPal',
            'Visa',
            'MasterCard',
            'None'
        ];

        $premise = [
            'client',
            'content-maker',
            'manager',
            'admin',
        ];

        return [
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'username' => fake()->userName(),
            'password' => Hash::make(fake()->password()),
            'email' => fake()->email(),
            'payMethod' => $payMethod[array_rand($payMethod)],
            'adders' => fake()->address(),
            'premise' => $premise[array_rand($premise)],
        ];
    }
}
