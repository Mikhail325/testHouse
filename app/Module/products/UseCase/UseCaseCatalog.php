<?php

namespace App\Module\products\UseCase;

use App\Module\products\Repositories\Interfaces\ProductRepositoriesInterface;

class UseCaseCatalog
{
    private $productRepository;

    public function __construct(ProductRepositoriesInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getListProducts(array $filter)
    {
        $products = $this->productRepository->getProduct($filter);

        if (!isset($products)) {
            return null;
        }

        if (isset($filter['characteristic'])) {
            $products = $products->filter(function ($product) use ($filter) {
                $characteristic = $product['characteristic']->keys()->toArray();
                return count(array_intersect($characteristic, $filter['characteristic'])) === count($filter['characteristic']);
            });
        }

        return $products;

    }
}
