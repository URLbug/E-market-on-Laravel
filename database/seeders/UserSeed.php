<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->firstName = fake()->firstName();
        $user->lastName = fake()->lastName();
        $user->username = 'admin';
        $user->password = Hash::make('admin');
        $user->email = fake()->email();
        $user->payMethod = 'PayPal';
        $user->adders = fake()->address();
        $user->premise = 'admin';

        $user->save();

        User::factory()->count(10)->create();
    }
}
