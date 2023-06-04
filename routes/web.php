<?php

use Illuminate\Support\Facades\Route;
use App\Structure\ShopSection\Admin\Controllers\ShopController;
use App\Structure\BasketSection\User\Controllers\BasketController;

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
    return view('welcome');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/product', function () {
    return view('product-single');
});

Route::get('/cart', function () {
    return view('cart');
});

// Роут для перенаправления в панель администратора
// Роут защищен посредником, который проверяет является ли пользователь администратором
Route::get('/admin/panelshop', [ShopController::class, 'panel'])->middleware('auth', 'admin')->name('adminshop');

Route::post('/admin/upload', [ShopController::class, 'upload'])->middleware('auth', 'admin');

Route::get('/purchase/', [BasketController::class, 'add'])->middleware('auth')->name('purchase');

Route::get('/basket/delete/', [BasketController::class, 'delete'])->middleware('auth')->name('basketdelete');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
