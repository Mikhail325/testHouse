<?php

namespace App\Module\products\Repositories;

use App\Module\products\Models\Product;
use App\Module\products\Repositories\Interfaces\ProductRepositoriesInterface;
class ProductRepositories implements ProductRepositoriesInterface
{
    public function getProducts(array $filter)
    {
        $products = Product::query()->select(['id', 'name', 'price']);

        if (isset($filter['min'])) {
            $products->where('price', '>', $filter['min']);
        }

        if (isset($filter['max'])) {
            $products->where('price', '<', $filter['max']);
        }

        $result = [];

        foreach ($products->get() as $product) {
            $product->feedbacks = $product->feedbacks->pluck('feedback');
            $product->characteristic = $product->characteristic->pluck('name', 'id');

            $result[] = $product->getAttributes();
        }

        return collect($result);
    }

    public function getProductById(int $id)
    {
        return Product::find($id);
    }
}
