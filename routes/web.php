<?php

use App\Http\Controllers\Main as Main;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category as Category;
use App\Http\Controllers\Admin\Images as Images;
use App\Http\Controllers\Admin\Post as Post;
//use App\Http\Controllers\Admin\Pack AS Pack;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\Services\DiscordController;

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

// Homepage
Route::name('index')->get('/', Main\IndexController::class);
Route::name('contacts')->get('/contacts', Main\ContactsController::class);
Route::name('launcher')->get('/launcher', Main\LauncherController::class);

// Posts
Route::name('post')->get('/post/{post}', Main\PostController::class);

// https://github.com/JakyeRU/Laravel-Discord-Authentication <3
Route::get('discord', [DiscordController::class, 'login'])->name('discord.login');

 Route::name('admin.')->prefix('admin')->middleware('Auth')->middleware('role:super_admin')->group(function () {
     //admin
     Route::get('/', AdminController::class);
     Route::name('categories.')->prefix('categories')->group(function () {
         //admin/categories
         Route::get('/', Category\IndexController::class);
         //admin/categories/create
         Route::get('/create', Category\CreateController::class)->name('create');
         Route::post('/', Category\StoreController::class)->name('store');
         Route::get('/{category}', Category\ShowController::class)->name('show');
         Route::get('/{category}/edit', Category\EditController::class)->name('edit');
         Route::patch('/{category}', Category\UpdateController::class)->name('update');
         Route::delete('/{category}', Category\DestroyController::class)->name('destroy');
     });
     Route::name('posts.')->prefix('posts')->group(function () {
         //admin/posts
         Route::get('/', Post\IndexController::class);
         //admin/posts/create
         Route::get('/create', Post\CreateController::class)->name('create');
         Route::post('/', Post\StoreController::class)->name('store');
         Route::get('/{post}', Post\ShowController::class)->name('show');
         Route::get('/{post}/edit', Post\EditController::class)->name('edit');
         Route::patch('/{post}', Post\UpdateController::class)->name('update');
         Route::delete('/{post}', Post\DestroyController::class)->name('destroy');
     });
     Route::name('images.')->prefix('images')->group(function () {
         Route::get('/', Images\GetController::class)->name('get');
         Route::get('/del', Images\DelController::class)->name('del');
     });
//     Route::name('packs.')->prefix('packs')->group(function () {
//         //admin/packs
//         Route::get('/', Pack\IndexController::class);
//         //admin/packs/create
//         Route::get('/create', Pack\CreateController::class)->name('create');
//         Route::post('/', Pack\StoreController::class)->name('store');
//         Route::get('/{pack}', Pack\ShowController::class)->name('show');
//         Route::get('/{pack}/edit', Pack\EditController::class)->name('edit');
//         Route::patch('/{pack}', Pack\UpdateController::class)->name('update');
//         Route::delete('/{pack}', Pack\DestroyController::class)->name('destroy');
//     });
 });

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
