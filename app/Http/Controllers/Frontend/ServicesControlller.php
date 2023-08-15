<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesControlller extends Controller
{
    public function show()
    {
        $services = Services::query()
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view('frontend.pages.services', compact('services'));
    }
}
