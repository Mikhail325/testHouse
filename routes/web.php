<?php

use Illuminate\Support\Facades\Route;
use App\Module\products\Controllers\CatalogController;
use App\Module\products\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('catalog')->group(function () {
    Route::get('/', [CatalogController::class, 'getListProducts']);
});

Route::prefix('product')->group(function () {
    Route::get('/{id}/feedback', [ProductController::class, 'getFeedbackByProductsId']);
    Route::post('/{id}/add-feedback', [ProductController::class, 'addFeedback'])->middleware('web');
});
