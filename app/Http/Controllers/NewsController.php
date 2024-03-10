<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::inRandomOrder()->limit(7)->get();
        $galleries = Gallery::inRandomOrder()->limit(4)->get();
        $news = News::orderBy('created_at', 'desc')->paginate(3);
        return view('frontend.news.index', compact('news', 'galleries' , 'articles'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $articles = Article::inRandomOrder()->limit(7)->get();
        $galleries = Gallery::inRandomOrder()->limit(4)->get();

        $prevPost = News::where('id', '<', $news->id)->orderBy('id', 'desc')->first();
        $nextPost = News::where('id', '>', $news->id)->orderBy('id', 'asc')->first();
        return view('frontend.news.single', compact('news','articles','galleries', 'prevPost','nextPost'));
    }
}
