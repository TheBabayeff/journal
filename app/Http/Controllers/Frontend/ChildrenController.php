<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{

    public function index()
    {
        $children = Child::orderBy('created_at', 'desc')->get();

        return view('frontend.children.index', compact('children'));
    }

    public function show($id)
    {
        $children = Child::findOrFail($id);


        return view('frontend.children.single' , compact('children'));

    }
}
