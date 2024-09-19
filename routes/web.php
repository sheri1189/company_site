<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;

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

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/portfolio/details', 'portfolio_details')->name('portfolio/details');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/details/{news}', 'blog_details')->name('blog/details/{news}');
    Route::get('/team', 'team')->name('team');
    Route::get('/team/details/{key}', 'team_details')->name('team/details/{key}');
    Route::get('/services/details/full-stack', 'full_stack')->name('/services/details/full-stack');
    Route::get('/services/details/mobile-app', 'mobile_app')->name('/services/details/mobile-app');
    Route::get('/services/details/ecommerce-stores', 'ecommerce_stores')->name('/services/details/ecommerce-stores');
    Route::get('/services/details/ui-ux', 'ui_ux')->name('/services/details/ui-ux');
    Route::get('/services/details/cms-development', 'cms_development')->name('/services/details/cms-development');
    Route::get('/services/details/custom-software', 'custom_software')->name('/services/details/custom-software');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('team/details/teamDetailMail',[SendMailController::class,'mail']);
});
