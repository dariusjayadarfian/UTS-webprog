<?php

use App\Models\Category;
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

Route::get('/', [\App\Http\Controllers\BookController::class, 'homepage']);

Route::get('/detail/{itemId}', [\App\Http\Controllers\BookController::class, 'detail']);

Route::get('/category/{categoryId}', [\App\Http\Controllers\CategoryController::class, 'show']);

Route::get('/publisher', [\App\Http\Controllers\PublisherController::class, 'index']);

Route::get('/publisher/{publisherId}', [\App\Http\Controllers\PublisherController::class, 'show']);

Route::get('/contact', function(){
    $categories = Category::all();

    return view('contact', ['categories' => $categories]);
});