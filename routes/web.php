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
    Route::get('/edit_category/{id}', [BlogController::class, 'edit_category'])->name('edit_category');
    Route::post('/update_category/{id}', [BlogController::class, 'update_category'])->name('update_category');
    Route::get('/delete_category/{id}', [BlogController::class, 'delete_category'])->name('delete_category');

    Route::get('/tag_list', [BlogController::class, 'tag_list'])->name('tag_list');
    Route::get('/create_tag', [BlogController::class, 'create_tag'])->name('create_tag');
    Route::post('/store_tag', [BlogController::class, 'store_tag'])->name('store_tag');
    Route::get('/edit_tag/{id}', [BlogController::class, 'edit_tag'])->name('edit_tag');
    Route::post('/update_tag/{id}', [BlogController::class, 'update_tag'])->name('update_tag');
    Route::get('/delete_tag/{id}', [BlogController::class, 'delete_tag'])->name('delete_tag');


    Route::get('/create_post', [BlogController::class, 'create_post'])->name('create_post');
    Route::post('/store_post', [BlogController::class, 'store_post'])->name('store_post');
    Route::get('/post_list', [BlogController::class, 'post_list'])->name('post_list');
    Route::get('/view_post', [BlogController::class, 'view_post'])->name('view_post');
    Route::get('/edit_post/{id}', [BlogController::class, 'edit_post'])->name('edit_post');
    Route::post('/update_post/{id}', [BlogController::class, 'update_post'])->name('update_post');
    Route::get('/delete_post/{id}', [BlogController::class, 'delete_post'])->name('delete_post');
});