<?php

use App\Http\Controllers\AdminController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::match(['get','post'], '/', [\App\Http\Controllers\IndexController::class, 'execute'])->name('home');

Route::get('/page/{alias}', [\App\Http\Controllers\PageController::class, 'execute'])->name('page');


Route::prefix('/admin')
    ->middleware('auth')
    ->group(function(){

        Route::get('/', [\App\Http\Controllers\AdminController::class, 'execute'])->name('admin');

        //admin/pages
        Route::prefix('pages')
            ->group(function (){
                //admin/pages
                Route::get('/', [\App\Http\Controllers\PagesController::class, 'execute'])->name('pages');
                //admin/pages/add
                Route::match(['get','post'], '/add', [\App\Http\Controllers\PagesAddController::class, 'execute'])->name('pagesAdd');
                //admin/pages/edit/{page}
                Route::match(['get','post','delete'], '/edit/{page}', [\App\Http\Controllers\PagesEditController::class, 'execute'])->name('pagesEdit');
            });

        //admin/portfolio
        Route::prefix('portfolio')
            ->group(function (){
                //admin/portfolio
                Route::get('/', [\App\Http\Controllers\PortfolioController::class, 'execute'])->name('portfolios');
                //admin/portfolio/add
                Route::match(['get','post'], '/add', [\App\Http\Controllers\PortfolioAddController::class, 'execute'])->name('portfoliosAdd');
                //admin/portfolio/edit/{portfolio}
                Route::match(['get','post','delete'], '/edit/{portfolio}', [\App\Http\Controllers\PortfolioEditController::class, 'execute'])->name('portfoliosEdit');
            });

        //admin/services
        Route::prefix('service')
            ->group(function (){
                //admin/service
                Route::get('/', [\App\Http\Controllers\ServiceController::class, 'execute'])->name('services');
                //admin/service/add
                Route::match(['get','post'], '/add', [\App\Http\Controllers\ServiceAddController::class, 'execute'])->name('serviceAdd');
                //admin/service/edit/{service}
                Route::match(['get','post','delete'], '/edit/{service}', [\App\Http\Controllers\ServiceEditController::class, 'execute'])->name('serviceEdit');
            });
    });
require __DIR__.'/auth.php';
