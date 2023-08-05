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
use App\Http\Controllers\admin\LoginController;
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
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\OurWorkController;
use App\Http\Controllers\front\PortfolioMainController;
use App\Http\Controllers\front\ServiceMainController;
use App\Http\Controllers\MailController;

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

Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin/enter', [LoginController::class, 'enter'])->name('admin__enter');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/mail', [MailController::class, 'mail'])->name('mail');
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', [AdminController::class, "index"])->name("index");
        Route::resource('/services', ServicesController::class);
        Route::resource('/header__banner', HeaderBannerController::class);
        Route::get('/header__banner/top/{id}', [HeaderBannerController::class, 'top'])->name('header__banner.top');
        Route::get('/header__banner/bottom/{id}', [HeaderBannerController::class, 'bottom'])->name('header__banner.bottom');
        Route::resource('/portfolio__filter', PortfolioFilterController::class);
        Route::get('/portfolio__filter/top/{id}', [PortfolioFilterController::class, 'top'])->name('portfolio__filter.top');
        Route::get('/portfolio__filter/bottom/{id}', [PortfolioFilterController::class, 'bottom'])->name('portfolio__filter.bottom');
        Route::resource('/portfolio', PortfolioController::class);
        Route::get('/portfolio/top/{id}', [PortfolioController::class, 'top'])->name('portfolio.top');
        Route::get('/portfolio/bottom/{id}', [PortfolioController::class, 'bottom'])->name('portfolio.bottom');

        Route::resource('/chose_us', ChoseUsController::class);
        Route::get('/chose_us/top/{id}', [ChoseUsController::class, 'top'])->name('chose_us.top');
        Route::get('/chose_us/bottom/{id}', [ChoseUsController::class, 'bottom'])->name('chose_us.bottom');

        Route::resource('/chose__us__companies', ChoseUsCompaniesController::class);
        Route::get('/chose__us__companies/top/{id}', [ChoseUsCompaniesController::class, 'top'])->name('chose__us__companies.top');
        Route::get('/chose__us__companies/bottom/{id}', [ChoseUsCompaniesController::class, 'bottom'])->name('chose__us__companies.bottom');



        Route::resource('/positions', PositionController::class);


        Route::resource('/work__proccess', WorkProccessController::class);
        Route::get('/work__proccess/top/{id}', [WorkProccessController::class, 'top'])->name('work__proccess.top');
        Route::get('/work__proccess/bottom/{id}', [WorkProccessController::class, 'bottom'])->name('work__proccess.bottom');




        Route::resource('/team', TeamController::class);
        Route::get('/team/top/{id}', [TeamController::class, 'top'])->name('team.top');
        Route::get('/team/bottom/{id}', [TeamController::class, 'bottom'])->name('team.bottom');


        Route::resource('/still', StillController::class);
        Route::resource('/contact__form', ContactFormController::class);
        Route::resource('/about__us', AboutUsController::class);
        Route::resource('/blogs__categories', BlogsCategoriesController::class);


        Route::resource('/blogs', BlogsController::class);
        Route::get('/blogs/top/{id}', [BlogsController::class, 'top'])->name('blogs.top');
        Route::get('/blogs/bottom/{id}', [BlogsController::class, 'bottom'])->name('blogs.bottom');



        Route::resource('/section__titles', SectionTitlesController::class);
        Route::resource('/settings', SettingsController::class);
});



Route::group(['as' => 'front.'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/about', [FrontAboutController::class, 'index'])->name('about');
    Route::get('/blogs', [FrontBlogsController::class, 'index'])->name('blogs');
    Route::get('/blog/{slug}', [FrontBlogsController::class, 'blog'])->name('blog');
    Route::get('/portfolio', [PortfolioMainController::class, 'index'])->name('portfolio');
    Route::get('/service/{slug}', [ServiceMainController::class, 'index'])->name('service');
    Route::get('/our__work/{slug}', [OurWorkController::class, 'index'])->name('our__work');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');


    Route::get('/get_portfolio/{id}', [PortfolioController::class, 'get_portfolio'])->name('get_portfolio');
});

