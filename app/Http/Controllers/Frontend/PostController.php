<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::query()
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view('frontend.pages.blog', compact('posts'));
    }
}
