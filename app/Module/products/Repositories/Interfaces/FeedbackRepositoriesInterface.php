<?php

namespace App\Module\products\Repositories\Interfaces;

interface FeedbackRepositoriesInterface
{
    public function create(int $productId, string $feedback);
}
