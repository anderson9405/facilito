<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');


Route::get('/test', [App\Http\Controllers\TestController::class, 'test']);
// Route::get('/user/{id}', [App\Http\Controllers\TestController::class, 'findUser']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'users'=> UserController::class,
    'categories'=> CategoryController::class,
    'products'=> ProductController::class,
]);

// Filter
Route::post('category/filter', [App\Http\Controllers\HomeController::class, 'filter'])->name('filter');


Route::post('cart', [App\Http\Controllers\FavoriteController::class, 'store'])->name('cart');
Route::get('cart', [App\Http\Controllers\FavoriteController::class, 'index'])->name('get_cart');