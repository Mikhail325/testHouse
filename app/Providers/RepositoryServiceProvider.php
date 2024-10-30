<?php

namespace App\Providers;

use App\Module\products\Repositories\FeedbackRepositories;
use App\Module\products\Repositories\Interfaces\FeedbackRepositoriesInterface;
use App\Module\products\Repositories\Interfaces\ProductRepositoriesInterface;
use App\Module\products\Repositories\ProductRepositories;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            ProductRepositoriesInterface::class,
            ProductRepositories::class
        );
        $this->app->bind(
            FeedbackRepositoriesInterface::class,
            FeedbackRepositories::class
        );
    }
}
