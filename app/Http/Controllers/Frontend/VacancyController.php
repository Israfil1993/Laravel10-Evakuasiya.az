<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function show()
    {
        $vacances = Vacancy::query()
            ->where('status', 1)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('frontend.pages.vacancy', compact('vacances'));
    }
}
