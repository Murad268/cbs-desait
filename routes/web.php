<?php

use App\Http\Controllers\admin\AboutUsController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogsCategoriesController;
use App\Http\Controllers\admin\ChoseUsCompaniesController;
use App\Http\Controllers\admin\ChoseUsController;
use App\Http\Controllers\admin\ContactFormController;
use App\Http\Controllers\admin\HeaderBannerController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\PortfolioFilterController;
use App\Http\Controllers\admin\PositionController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\StillController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\WorkProccessController;
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
        Route::resource('/chose_us', ChoseUsController::class);
        Route::resource('/chose__us__companies', ChoseUsCompaniesController::class);
        Route::resource('/positions', PositionController::class);
        Route::resource('/work__proccess', WorkProccessController::class);
        Route::resource('/team', TeamController::class);
        Route::resource('/still', StillController::class);
        Route::resource('/contact__form', ContactFormController::class);
        Route::resource('/about__us', AboutUsController::class);
        Route::resource('/blogs__categories', BlogsCategoriesController::class);
});
