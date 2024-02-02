<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        $journals = Journal::all();

        return view('frontend.journals.index',compact('journals'));
    }

    public function show($id)
    {
        $journal = Journal::findOrFail($id);
        $journals = Journal::inRandomOrder(6)->get();
       return view('frontend.journals.single', compact('journal', 'journals'));
    }
}
