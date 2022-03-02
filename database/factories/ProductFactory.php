<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->sentence(3),
            'description' => $this->faker->text(300),
            'prix' => rand(1, 200),
            'slug' => $this->faker->sentence(1),
            'image' => $this->faker->imageUrl(),
            'release_at' => $this->faker->date,
            'cdc' =>$this->faker->randomElement(['yes', 'no']),
            'colorlist' => $this->faker->randomElement(['rouge', 'bleu', 'vert']),
            'promotion' => rand(1, 50),
            // 'categorie_id' => rand(1, 5),
        ];
    }
}
