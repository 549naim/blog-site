<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [HomeController::class, 'index'])->name('name');
Route::get('/blog/{name}/{id}', [HomeController::class, 'single_blog'])->name('single_blog');
Route::get('/category/{id}', [HomeController::class, 'category'])->name('category');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



Route::get('/admin_login', [AdminController::class, 'admin_login'])->name('admin_login');
Route::post('/post_admin_login', [AdminController::class, 'post_admin_login'])->name('post_admin_login');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/category_list', [BlogController::class, 'category_list'])->name('category_list');
    Route::get('/create_category', [BlogController::class, 'create_category'])->name('create_category');
    Route::post('/store_category', [BlogController::class, 'store_category'])->name('store_category');

    Route::get('/create_post', [BlogController::class, 'create_post'])->name('create_post');
    Route::post('/store_post', [BlogController::class, 'store_post'])->name('store_post');
});