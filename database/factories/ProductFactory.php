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
    public function definition(): array
    {
        return [
            'keterangan' => fake()->text(),
            'kecacatan' => fake()->text(),
            'image' => fake()->word(),
            'jumlah' => fake()->numberBetween(1, 1000),
        ];
    }
}
