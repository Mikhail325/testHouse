<?php

namespace App\Module\products\UseCase;

use App\Module\products\Repositories\Interfaces\FeedbackRepositoriesInterface;
use App\Module\products\Repositories\Interfaces\ProductRepositoriesInterface;

class UseCaseProduct
{
    private $productRepository;
    private $feedbackRepository;

    public function __construct(
        ProductRepositoriesInterface $productRepository,
        FeedbackRepositoriesInterface $feedbackRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->feedbackRepository = $feedbackRepository;
    }

    public function getProductById(int $id)
    {
         $product = $this->productRepository->getProductById($id);

        if (!isset($product)) {
            throw new \Exception("Товара c id $id не найден");
        }

        return $product;
    }

    /**
     * @param int $id
     * @param string $feedback
     * @return void
     * Добавления отзыва товару
     */
    public function addFeedback(int $id, string $feedback): void
    {
        $this->feedbackRepository->create($id, $feedback);
    }
}
