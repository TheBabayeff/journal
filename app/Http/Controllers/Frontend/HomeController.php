<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Journal;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $journals = Journal::where('is_visible', true)->get();
        $news     = News::inRandomOrder()->limit(2)->get();
        $articles = Article::inRandomOrder()->limit(6)->get();
        return view('frontend.index', compact('journals', 'news', 'articles'));
    }
}
