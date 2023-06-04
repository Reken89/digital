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

Route::get('/', function () {return view('welcome');});

// Роут для перенаправления на страницу магазина
Route::get('/shop', function () {return view('shop');});

// Роут для перенаправления на страницу товара
Route::get('/product', function () {return view('product-single');});

// Роут для перенаправления в корзину
Route::get('/cart', function () {return view('cart');});

// Роут для перенаправления в панель администратора
// Роут защищен посредником, который проверяет является ли пользователь администратором
Route::get('/admin/panelshop', [ShopController::class, 'panel'])->middleware('auth', 'admin')->name('adminshop');

// Роут добавления товара в таблицу clothes
Route::post('/admin/upload', [ShopController::class, 'upload'])->middleware('auth', 'admin');

// Роут добавления товара в корзину
// !!!ДЛЯ ДОБАВЛЕНИЯ НЕОБХОДИМО ИСПОЛЬЗОВАТЬ МЕТОД POST!!!
Route::get('/purchase/', [BasketController::class, 'add'])->middleware('auth')->name('purchase');

// Роут удаления товара из корзины
// !!!ДЛЯ УДАЛЕНИЯ НЕОБХОДИМО ИСПОЛЬЗОВАТЬ МЕТОД DELETE!!!
Route::get('/basket/delete/', [BasketController::class, 'delete'])->middleware('auth')->name('basketdelete');

// Роут для авторизации (Из коробки Laravel)
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
