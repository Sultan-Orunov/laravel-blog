<?php

use App\Http\Controllers\Main\IndexController;
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


Route::get('/', IndexController::class)->name('main.index');

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', \App\Http\Controllers\Admin\Main\IndexController::class)->name('admin.index');

    Route::group(['prefix' => 'categories'], function (){
        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.categories.index');
        Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.categories.create');
        Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.categories.store');
        Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('admin.categories.show');
        Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('admin.categories.edit');
        Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.categories.update');
        Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DestroyController::class)->name('admin.categories.destroy');
    });
    Route::group(['prefix' => 'tags'], function (){
        Route::get('/', \App\Http\Controllers\Admin\Tag\IndexController::class)->name('admin.tags.index');
        Route::get('/create', \App\Http\Controllers\Admin\Tag\CreateController::class)->name('admin.tags.create');
        Route::post('/', \App\Http\Controllers\Admin\Tag\StoreController::class)->name('admin.tags.store');
        Route::get('/{tag}', \App\Http\Controllers\Admin\Tag\ShowController::class)->name('admin.tags.show');
        Route::get('/{tag}/edit', \App\Http\Controllers\Admin\Tag\EditController::class)->name('admin.tags.edit');
        Route::patch('/{tag}', \App\Http\Controllers\Admin\Tag\UpdateController::class)->name('admin.tags.update');
        Route::delete('/{tag}', \App\Http\Controllers\Admin\Tag\DestroyController::class)->name('admin.tags.destroy');
    });
});


Auth::routes();
