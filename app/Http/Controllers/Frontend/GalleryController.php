<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->get();

        return view('frontend.galleries.index', compact('galleries'));

    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('frontend.galleries.single',compact('gallery'));
    }
}
