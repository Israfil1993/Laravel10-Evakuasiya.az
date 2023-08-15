<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function show()
    {
        $informationes = Post::query()
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view('frontend.pages.information', compact('informationes'));
    }
}
