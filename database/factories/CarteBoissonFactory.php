<?php

namespace Database\Factories;

use App\Models\CarteBoisson;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarteBoissonFactory extends Factory
{
    protected $model = CarteBoisson::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'ingredient' => $this->faker->text(100),
            'prix' => $this->faker->randomFloat(2, 1, 10),
            'ordre' => $this->faker->numberBetween(1, 10),
            'section' => $this->faker->randomElement(['chaude', 'fraiche']),
            'active' => $this->faker->boolean(80), // 80% chance of being active
        ];
    }
}
