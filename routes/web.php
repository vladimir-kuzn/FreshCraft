<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\ContactsController;
use App\Http\Controllers\Main\LauncherController;
use App\Http\Controllers\Main\MainPostController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CategoryCreateController;
use App\Http\Controllers\Admin\Category\CategoryStoreController;
use App\Http\Controllers\Admin\Category\CategoryShowController;
use App\Http\Controllers\Admin\Category\CategoryEditController;
use App\Http\Controllers\Admin\Category\CategoryUpdateController;
use App\Http\Controllers\Admin\Category\CategoryDestroyController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Post\PostCreateController;
use App\Http\Controllers\Admin\Post\PostStoreController;
use App\Http\Controllers\Admin\Post\PostShowController;
use App\Http\Controllers\Admin\Post\PostEditController;
use App\Http\Controllers\Admin\Post\PostUpdateController;
use App\Http\Controllers\Admin\Post\PostDestroyController;
use App\Http\Controllers\Admin\Post\GetImagesController;
use App\Http\Controllers\Admin\Post\DelImagesController;
//use App\Http\Controllers\Admin\Pack\PackController;
//use App\Http\Controllers\Admin\Pack\PackCreateController;
//use App\Http\Controllers\Admin\Pack\PackStoreController;
//use App\Http\Controllers\Admin\Pack\PackShowController;
//use App\Http\Controllers\Admin\Pack\PackEditController;
//use App\Http\Controllers\Admin\Pack\PackUpdateController;
//use App\Http\Controllers\Admin\Pack\PackDestroyController;


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
Route::name('index')->get('/', IndexController::class);

Route::name('contacts')->get('/contacts', ContactsController::class);
Route::name('launcher')->get('/launcher', LauncherController::class);
Route::name('post')->get('/post/{post}', MainPostController::class);


 Route::name('admin.')->prefix('admin')->middleware('Auth')->middleware('role:admin')->group(function () {
     //admin
     Route::get('/', AdminController::class);

     Route::name('categories.')->prefix('categories')->group(function () {
         //admin/categories
         Route::get('/', CategoryController::class);
         //admin/categories/create
         Route::get('/create', CategoryCreateController::class)->name('create');
         Route::post('/', CategoryStoreController::class)->name('store');
         Route::get('/{category}', CategoryShowController::class)->name('show');
         Route::get('/{category}/edit', CategoryEditController::class)->name('edit');
         Route::patch('/{category}', CategoryUpdateController::class)->name('update');
         Route::delete('/{category}', CategoryDestroyController::class)->name('destroy');
     })->name('categories');

     Route::name('posts.')->prefix('posts')->group(function () {
         //admin/posts
         Route::get('/', PostController::class);
         //admin/posts/create
         Route::get('/create', PostCreateController::class)->name('create');
         Route::post('/', PostStoreController::class)->name('store');
         Route::get('/{post}', PostShowController::class)->name('show');
         Route::get('/{post}/edit', PostEditController::class)->name('edit');
         Route::patch('/{post}', PostUpdateController::class)->name('update');
         Route::delete('/{post}', PostDestroyController::class)->name('destroy');

     })->name('posts');

     Route::name('images.')->prefix('images')->group(function () {
         Route::get('/', GetImagesController::class)->name('get');
         Route::get('/del', DelImagesController::class)->name('del');
     });
//
//     Route::name('packs.')->prefix('packs')->group(function () {
//         //admin/packs
//         Route::get('/', PackController::class);
//         //admin/packs/create
//         Route::get('/create', PackCreateController::class)->name('create');
//         Route::post('/', PackStoreController::class)->name('store');
//         Route::get('/{pack}', PackShowController::class)->name('show');
//         Route::get('/{pack}/edit', PackEditController::class)->name('edit');
//         Route::patch('/{pack}', PackUpdateController::class)->name('update');
//         Route::delete('/{pack}', PackDestroyController::class)->name('destroy');
//     })->name('packs');
 });


Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
