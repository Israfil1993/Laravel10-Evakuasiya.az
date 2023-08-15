<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class Vacancy_DetailController extends Controller
{
    public function show($id)
    {
        $id= \request()->segment(3);

        $vacancy =Vacancy::findOrFail($id);

        return view('frontend.pages.vacancy-detail', compact('vacancy'));
    }
}
