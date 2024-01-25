<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();

        return view('frontend.articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $prevPost = Article::where('id', '<', $article->id)->orderBy('id', 'desc')->first();
        $nextPost = Article::where('id', '>', $article->id)->orderBy('id', 'asc')->first();

        return view('frontend.articles.single', compact('article', 'prevPost', 'nextPost'));
    }
}
