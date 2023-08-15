<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompanyLogoSlider;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function show()
    {
        $partners = CompanyLogoSlider::query()
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view('frontend.pages.partners', compact('partners'));
    }
}
