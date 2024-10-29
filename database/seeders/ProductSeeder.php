<?php

namespace Database\Seeders;

use App\Module\products\Models\Characteristic;
use App\Module\products\Models\Feedback;
use App\Module\products\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = Product::factory(20)->create();
        $characteristics = Characteristic::factory(30)->create();
        Feedback::factory(25)->create();

        foreach ($products as $product) {
            $characteristicId = $characteristics->random(5)->pluck('id');
            $product->characteristic()->attach($characteristicId);
        }
    }
}
