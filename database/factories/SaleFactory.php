<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    protected $model = Sale::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'telegram' => $this->faker->word,
            'price' => $this->faker->randomNumber,
            'paid' => $this->faker->boolean,
        ];
    }
}
