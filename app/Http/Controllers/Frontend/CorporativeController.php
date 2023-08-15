<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Corporative;
use Illuminate\Http\Request;

class CorporativeController extends Controller
{
    public function show()
    {
        $corporatives = Corporative::query()
            ->where('status', 1)
            ->get();

        return view('frontend.pages.esaskorporativ', compact('corporatives'));
    }
}
