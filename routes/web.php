<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/', [ProductController::class, 'prod']);
// Route::get('/', [ProductController::class, 'prodhead']);
// Route::get('/', [CarouselController::class, 'carousel']);

Route::get('/products', [ProductController::class, 'products']);
// Route::get('/product', [ProductController::class, 'product']);
Route::get('/product/{product}', [ProductController::class, 'show']);

Route::get('/categorie', [CategorieController::class, 'cate']);
Route::get('/categorie', [CategorieController::class, 'catelist']);

Route::get('/contact', [ContactController::class, 'contact']);
// Route::get('/category', [ProductController::class, 'category']);
Route::get('/cart', [ProductController::class, 'panier']);