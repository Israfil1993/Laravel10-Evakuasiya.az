<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Statistics_Counters;
use Illuminate\Http\Request;

class Statictics_CountersController extends Controller
{
    public function show()
    {
        $staticticsCounters = Statistics_Counters::query()
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view('frontend.pages.gallery', compact('staticticsCounters'));
    }
}
