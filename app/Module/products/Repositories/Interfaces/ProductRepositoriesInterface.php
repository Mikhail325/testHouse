<?php

namespace App\Module\products\Repositories\Interfaces;

use App\Module\products\Models\Product;
use Illuminate\Support\Collection;

/**
 * Интерфейс методов для работы с таблицей products
 */
interface ProductRepositoriesInterface
{
    /**
     * @param array $filter
     * @return Collection
     * Метод получения списка товаров по условиям фильтрации
     */
    public function getProducts(array $filter): Collection;

    /**
     * @param int $id
     * @return Product|null
     * Метод получения товара по Id
     */
    public function getProductById(int $id): Product|null;
}
