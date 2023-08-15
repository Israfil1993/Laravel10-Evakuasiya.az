<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $abouts = About::query()
            ->take(1)
            ->get();

        return view('frontend.pages.about', compact('abouts'));
    }
}
