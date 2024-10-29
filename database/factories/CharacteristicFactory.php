<?php

namespace Database\Factories;

use App\Module\products\Models\Characteristic;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacteristicFactory extends Factory
{

    protected $model = Characteristic::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->word(),
        ];
    }
}
