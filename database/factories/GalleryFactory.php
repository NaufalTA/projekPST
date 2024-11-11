<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'tittle' => fake()->sentence(mt_rand(2, 3)),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'uploaded_by' => fake()->userName()
        ];
    }
}
