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
    });
});


Auth::routes();
