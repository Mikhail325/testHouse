<?php

namespace App\Module\products\Repositories;

use App\Module\products\Models\Feedback;
use App\Module\products\Repositories\Interfaces\FeedbackRepositoriesInterface;
class FeedbackRepositories implements FeedbackRepositoriesInterface
{

    public function create(int $productId, string $feedback): void
    {
        Feedback::create([
            'feedback' => $feedback,
            'id_product' => $productId
        ]);
    }
}
