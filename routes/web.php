<?php

use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\HomeController;
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
    if (! in_array($locale, ['en', 'ru', 'az', 'tr'])) {
        abort(400);
    }
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');





Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/news',[NewsController::class,'index'])->name('news');
Route::get('/news/{slug}',[NewsController::class,'show'])->name('news.show');

Route::get('/articles',[ArticleController::class,'index'])->name('articles');
Route::get('/articles/{slug}',[ArticleController::class,'show'])->name('article.show');




