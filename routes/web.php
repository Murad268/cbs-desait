<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\AboutUsController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogsCategoriesController;
use App\Http\Controllers\admin\BlogsController;
use App\Http\Controllers\admin\ChoseUsCompaniesController;
use App\Http\Controllers\admin\ChoseUsController;
use App\Http\Controllers\admin\ContactFormController;
use App\Http\Controllers\admin\HeaderBannerController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\PortfolioFilterController;
use App\Http\Controllers\admin\PositionController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\StillController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\WorkProccessController;
use App\Http\Controllers\front\AboutController as FrontAboutController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\SectionTitlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\BlogsController as FrontBlogsController;
use App\Http\Controllers\front\OurWorkController;
use App\Http\Controllers\front\PortfolioMainController;
use App\Http\Controllers\front\ServiceMainController;

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
        Route::resource('/blogs', BlogsController::class);
        Route::resource('/section__titles', SectionTitlesController::class);
        Route::resource('/settings', SettingsController::class);
});



Route::group(['as' => 'front.'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/about', [FrontAboutController::class, 'index'])->name('about');
    Route::get('/blogs', [FrontBlogsController::class, 'index'])->name('blogs');
    Route::get('/blog', [FrontBlogsController::class, 'blog'])->name('blog');
    Route::get('/portfolio', [PortfolioMainController::class, 'index'])->name('portfolio');
    Route::get('/service', [ServiceMainController::class, 'index'])->name('service');
    Route::get('/our__work', [OurWorkController::class, 'index'])->name('our__work');
});

