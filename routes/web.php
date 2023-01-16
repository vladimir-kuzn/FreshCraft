<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\ContactsController;
use App\Http\Controllers\Main\LauncherController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CategoryCreateController;
use App\Http\Controllers\Admin\Category\CategoryStoreController;
use App\Http\Controllers\Admin\Category\CategoryShowController;
use App\Http\Controllers\Admin\Category\CategoryEditController;
use App\Http\Controllers\Admin\Category\CategoryUpdateController;
use App\Http\Controllers\Admin\Category\CategoryDestroyController;
use App\Http\Middleware\Autorized;

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

Route::name('admin.')->middleware([Autorized::class])->group( function(){
    Route::get('/admin', AdminController::class);
});

// Route::name('admin.')->prefix('admin')->middleware('Auth')->group(function () {
//     //admin
//     Route::get('/', AdminController::class);
//     Route::name('categories.')->prefix('categories')->group(function () {
//         //admin/categories
//         Route::get('/', CategoryController::class);
//         //admin/categories/create
//         Route::get('/create', CategoryCreateController::class)->name('create');
//         Route::post('/', CategoryStoreController::class)->name('store');
//         Route::get('/{category}', CategoryShowController::class)->name('show');
//         Route::get('/{category}/edit', CategoryEditController::class)->name('edit');
//         Route::patch('/{category}', CategoryUpdateController::class)->name('update');
//         Route::delete('/{category}', CategoryDestroyController::class)->name('destroy');
//     })->name('categories');
// });


Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
