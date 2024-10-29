<?php

namespace Database\Factories;

use App\Module\products\Models\Feedback;
use App\Module\products\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;
    public function definition(): array
    {
        return [
            'feedback' => fake()->text,
            'id_product' => Product::get()->random()->id
        ];
    }
}
