<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1, 20),
            'slug' => fake()->slug(3),
            'tittle' => fake()->sentence(mt_rand(2, 3)),
            'content' => collect(fake()->paragraphs(mt_rand(3, 6)))
            ->map(fn($p) => "<p>$p</p>")->implode(''),
            'uploaded_by' => fake()->userName()
        ];
    }
}
