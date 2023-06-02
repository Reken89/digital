<?php

use Illuminate\Support\Facades\Route;
use App\Structure\ShopSection\Admin\Controllers\ShopController;

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

// Роут для перенаправления в панель администратора
// Роут защищен посредником, который проверяет является ли пользователь администратором
Route::get('/admin/panelshop', [ShopController::class, 'panel'])->middleware('auth', 'admin')->name('adminshop');

Route::post('/admin/upload', [ShopController::class, 'upload'])->middleware('auth', 'admin');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
