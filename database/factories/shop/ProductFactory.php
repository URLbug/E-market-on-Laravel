<?php

namespace Database\Factories\shop;

use App\Models\shop\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $picture = [
            'assets/images/products-banner/products-01.jpg',
            'assets/images/products-banner/products-02.jpg',
            'assets/images/products-banner/products-03.jpg',
            'assets/images/products-banner/products-04.jpg',
        ];

        $color = [
            'blue',
            'gray',
            'dark-blue',
            'dark-gray',
        ];

        $tag = [
            'Furniture',
            'Fashion',
            'For Men',
            'Women',
            'Accessories',
            'Clothing',
        ];

        $categories = [
            'Office',
            'Home',
            'Sofa',
            'Table',
            'Bed',
        ];

        $reviews_id = [];

        $review_id = Review::query()->get('id');

        foreach($review_id as $review)
        {
            $reviews_id[] = $review->id;
        }

        $seal = [
          30,
          40,
        ];

        return [
            'name' => fake()->word(),
            'picture' => $picture[array_rand($picture)],
            'price' => random_int(10, 1000),
            'reviews_id' => $reviews_id[array_rand($reviews_id)],
            'color' => $color[array_rand($color)],
            'tag' => $tag[array_rand($tag)],
            'categories' => $categories[array_rand($categories)],
            'sku' => 'Ch-' . random_int(100, 999),
            'sale' => $seal[array_rand($seal)],
            'seller' => random_int(1, 10),
            'information' => fake()->text(1000),
            'description' => fake()->text(1000),
        ];
    }
}
