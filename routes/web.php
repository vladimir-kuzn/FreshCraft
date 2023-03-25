<?php

use App\Http\Controllers\Admin\Category as Category;
use App\Http\Controllers\Admin\Images as Images;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Post as Post;
use App\Http\Controllers\Auth\Services\DiscordController;
use App\Http\Controllers\CheckServerController;
use App\Http\Controllers\Client\Contacts as Contacts;
use App\Http\Controllers\Client\InDevelopmentController;
use App\Http\Controllers\Client\Launcher as Launcher;
use App\Http\Controllers\Client\Main as Main;
use App\Http\Controllers\Client\Posts as Posts;
use App\Http\Controllers\Client\Packs as Packs;
//TODO ServerController.php
// use App\Http\Controllers\Client\Servers as Servers;
use App\Http\Controllers\Client\Shop as Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Admin\Pack AS Pack;

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

// Single pages
Route::name('index')->get('/', Main\IndexController::class);
Route::name('contacts')->get('/contacts', Contacts\IndexController::class);
Route::name('launcher')->get('/launcher', Launcher\IndexController::class);
Route::name('legal')->get('/legal', InDevelopmentController::class);
Route::name('about')->get('/about', InDevelopmentController::class);

// Servers
Route::name('severs.')->prefix('servers')->group(function (){
    Route::get('/', InDevelopmentController::class);
    Route::get('/{server_title}', InDevelopmentController::class)->name('server');
});

// ModPacks
Route::name('packs.')->prefix('packs')->group(function (){
    Route::get('/', Packs\IndexController::class);
    Route::get('/{pack_title}', InDevelopmentController::class)->name('pack');
});

// Shop
Route::name('shop.')->prefix('shop')->group(function (){
    Route::get('/', Shop\ShopController::class);
    Route::get('/{product_id}', InDevelopmentController::class)->name('product');
});

// Posts
Route::name('posts.')->prefix('posts')->group(function (){
    Route::get('/', InDevelopmentController::class);
    Route::name('post')->get('/{post}', Posts\PostController::class);
});

 Route::name('admin.')->prefix('admin')->middleware('Auth')->middleware('role:super_admin')->group(function () {
     //admin
     Route::get('/', AdminController::class);
     Route::name('categories.')->prefix('categories')->group(function () {
         //admin/categories
         Route::get('/', Category\IndexController::class);
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
         Route::get('/create', Post\CreateController::class)->name('create');
         Route::post('/', Post\StoreController::class)->name('store');
         Route::get('/{post}', Post\ShowController::class)->name('show');
         Route::get('/{post}/edit', Post\EditController::class)->name('edit');
         Route::patch('/{post}', Post\UpdateController::class)->name('update');
         Route::delete('/{post}', Post\DestroyController::class)->name('destroy');
     });
     Route::name('images.')->prefix('images')->group(function () {
         //admin/images
         Route::get('/', Images\GetController::class)->name('get');
         Route::post('/upload', [Images\SetController::class, 'upload'])->name('upload');
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

Route::name('server_status')->get('/health', CheckServerController::class);

// https://github.com/JakyeRU/Laravel-Discord-Authentication <3
Route::get('discord', [DiscordController::class, 'login'])->name('discord.login');
Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
