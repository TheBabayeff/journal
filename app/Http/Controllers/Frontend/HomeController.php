<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Chairmen;
use App\Models\Gallery;
use App\Models\Journal;
use App\Models\News;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $journals  = Journal::where('is_visible', true)->get();
        $news      = News::inRandomOrder()->limit(2)->get();
        $articles  = Article::inRandomOrder()->limit(6)->get();
        $chairmens = Chairmen::inRandomOrder()->get();
        $galleries = Gallery::inRandomOrder()->limit(4)->get();
        $slides    = Slide::where('is_visible', true)->get();


        return view('frontend.index', compact('journals', 'news', 'articles','chairmens','galleries','slides'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }


}
