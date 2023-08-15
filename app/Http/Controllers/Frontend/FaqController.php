<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function show()
    {
        $faqs = Faq::query()
            ->where('status', 1)
            ->limit(12)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('frontend.pages.faq', compact('faqs'));
    }
}
