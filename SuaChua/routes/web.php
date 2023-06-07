<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class , 'index'])->name('home');
Route::get('/services', [\App\Http\Controllers\ServiceController::class , 'index'])->name('services');
Route::get('/services/{slug}', [\App\Http\Controllers\ServiceController::class , 'show'])->name('services.show');
Route::get('/advises', [\App\Http\Controllers\AdvisesController::class , 'index'])->name('advises');
Route::post('/advises', [\App\Http\Controllers\AdvisesController::class , 'store'])->name('advises');
Route::get('/about', [\App\Http\Controllers\AboutController::class , 'index'])->name('about');
Route::get('/p/price-list', [\App\Http\Controllers\AboutController::class , 'show']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class , 'index'])->name('contact');
Route::get('/posts', [\App\Http\Controllers\PostController::class , 'index'])->name('posts');
Route::get('/posts/{slug}', [\App\Http\Controllers\PostController::class , 'show'])->name('posts.show');
Route::get('/register', [\App\Http\Controllers\RegisterController::class , 'index'])->name('register');
Route::post('/book', [\App\Http\Controllers\RegisterController::class , 'store'])->name('book');
Route::get('/confirm', [\App\Http\Controllers\RegisterController::class , 'show'])->name('confirm');

Route::post('/save-cart', [\App\Http\Controllers\ServiceController::class , 'save_cart'])->name('save-cart');
Route::post('/show-cart', [\App\Http\Controllers\ServiceController::class , 'show_cart'])->name('show-cart');
Route::get('/delete-cart/{rowId}', [\App\Http\Controllers\ServiceController::class , 'delete_cart'])->name('delete-cart');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
