<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FundReward;
use Illuminate\Http\Request;

class FundRewardsController extends Controller
{

    public function index()
    {
        $fundRewards = FundReward::orderBy('created_at', 'desc')->get();
        return view('frontend.rewards.index', compact('fundRewards'));
    }

    public function show($id)
    {
        $fundRewards = FundReward::findOrFail($id);

        return view('frontend.rewards.single' , compact('fundRewards'));
    }
}
