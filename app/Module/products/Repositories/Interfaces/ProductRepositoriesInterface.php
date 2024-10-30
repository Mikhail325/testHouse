<?php

namespace App\Module\products\Repositories\Interfaces;

interface ProductRepositoriesInterface
{
    public function getProducts(array $filter);
    public function getProductById(int $id);
}
