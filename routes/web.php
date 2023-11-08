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
        Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('admin.categories.edit');
        Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.categories.update');
        Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DestroyController::class)->name('admin.categories.destroy');
    });
});


Auth::routes();
