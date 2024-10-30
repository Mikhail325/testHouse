<?php

namespace App\Module\products\Repositories\Interfaces;

/**
 * Интерфейс методов для работы с таблицей feedback
 */
interface FeedbackRepositoriesInterface
{
    /**
     * @param int $productId
     * @param string $feedback
     * Метод создания отзва товару по его id
     */
    public function create(int $productId, string $feedback): void;
}
