<?php

use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\ChairmenController;
use App\Http\Controllers\Frontend\ChildrenController;
use App\Http\Controllers\Frontend\FundRewardsController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JournalController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\App;
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

Route::get('language/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ru', 'az', 'tr']))
    {
        abort(400);
    }
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');





Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');

Route::get('/news',[NewsController::class,'index'])->name('news');
Route::get('/news/{slug}',[NewsController::class,'show'])->name('news.show');

Route::get('/children',[ChildrenController::class,'index'])->name('children');
Route::get('/children/{id}',[ChildrenController::class,'show'])->name('children.show');

Route::get('/rewards',[FundRewardsController::class,'index'])->name('rewards');
Route::get('/rewards/{id}',[FundRewardsController::class,'show'])->name('rewards.show');

Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries');
Route::get('/galleries/{id}', [GalleryController::class, 'show'])->name('gallery.show');

Route::get('/journals',[JournalController::class,'index'])->name('journals');
Route::get('/journals/{id}',[JournalController::class,'show'])->name('journal.show');

Route::get('/articles',[ArticleController::class,'index'])->name('articles');
Route::get('/articles/{slug}',[ArticleController::class,'show'])->name('article.show');

Route::get('/chairmen',[ChairmenController::class,'index'])->name('chairmen');
Route::get('/chairmen/{id}',[ChairmenController::class,'show'])->name('chairmen.show');



