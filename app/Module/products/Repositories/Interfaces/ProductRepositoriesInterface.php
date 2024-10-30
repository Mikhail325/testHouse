<?php

namespace App\Module\products\Repositories\Interfaces;

interface ProductRepositoriesInterface
{
    public function getProduct(array $filter);
}
