<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Chairmen;
use App\Models\Child;
use App\Models\Gallery;
use App\Models\Journal;
use App\Models\News;
use App\Models\Orden;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $journals  = Journal::where('is_visible', true)->limit(3)->get();
        $news      = News::limit(2)->get();
        $articles  = Article::limit(3)->get();
        $chairmens = Chairmen::inRandomOrder()->limit(6)->get();
        //$galleries = Gallery::inRandomOrder()->limit(4)->get();
        $slides    = Slide::where('is_visible', true)->limit(4)->get();
        $ordens    = Orden::all();
        $children  = Child::limit(3)->get();



        return view('frontend.index', compact('journals', 'news', 'articles','chairmens','slides','ordens', 'children'));
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
