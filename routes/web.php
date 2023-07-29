<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\HeaderBannerController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\PortfolioFilterController;
use App\Http\Controllers\admin\ServicesController;
use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', [AdminController::class, "index"])->name("index");
        Route::resource('/services', ServicesController::class);
        Route::resource('/header__banner', HeaderBannerController::class);
        Route::resource('/portfolio__filter', PortfolioFilterController::class);
        Route::resource('/portfolio', PortfolioController::class);
});
