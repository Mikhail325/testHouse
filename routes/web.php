<?php

use Illuminate\Support\Facades\Route;
use App\Module\products\Controllers\CatalogController;

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
