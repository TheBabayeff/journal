<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chairmen;
use Illuminate\Http\Request;

class ChairmenController extends Controller
{
    public function index()
    {
        $chairmens = Chairmen::all();

        return view('frontend.chairmen.index' , compact('chairmens'));
    }

    public function show($id)
    {
        $chairmens = Chairmen::inRandomOrder()->get();
        $chairman  = Chairmen::findOrFail($id);

        return view('frontend.chairmen.single', compact('chairmens', 'chairman'));
    }
}
