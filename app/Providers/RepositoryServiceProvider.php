<?php

namespace App\Providers;

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
    }
}
