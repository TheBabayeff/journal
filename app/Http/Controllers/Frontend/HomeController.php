<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Chairmen;
use App\Models\Child;
use App\Models\FundReward;
use App\Models\Gallery;
use App\Models\Journal;
use App\Models\News;
use App\Models\Orden;
use App\Models\Slide;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $journals    = Journal::where('is_visible', true)->limit(3)->get();
        $news        = News::orderBy('created_at', 'desc')->limit(2)->get();
        $articles    = Article::orderBy('created_at', 'desc')->limit(3)->get();
        $chairmens   = Chairmen::inRandomOrder()->limit(6)->get();
        //$galleries = Gallery::inRandomOrder()->limit(4)->get();
        $slides      = Slide::where('is_visible', true)->limit(4)->get();
        $firstOrdens = Orden::take(6)->get();
        $lastOrdens  = Orden::skip(6)->take(9)->get();
        $ordens      = Orden::all();
        $children    = Child::orderBy('created_at', 'desc')->limit(3)->get();
        $fundRewards = FundReward::orderBy('created_at', 'desc')->limit(3)->get();



        return view('frontend.index', compact('journals', 'news', 'articles','chairmens','slides','ordens', 'children' , 'fundRewards','firstOrdens', 'lastOrdens'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function subscribe(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $subscribe = new Subscribe();
        $subscribe->email = $validatedData['email'];
        $subscribe->save();

        return redirect()->route('welcome')->with('succcess', 'Successfull send');
    }


}
