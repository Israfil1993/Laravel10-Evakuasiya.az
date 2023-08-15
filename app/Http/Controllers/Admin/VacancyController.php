<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateVacancyRequest;
use App\Http\Requests\VacancyRequest;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function list()
    {
        $vacanciesAz = Vacancy::query()
        ->whereNotNull('title_az')
        ->whereNotNull('education_level_az')
        ->whereNotNull('contract_type_az')
        ->whereNotNull('application_email_az')
        ->select('id', 'title_az', 'education_level_az', 'contract_type_az', 'application_email_az', 'status')
        ->orderBy('created_at', 'ASC')
        ->paginate(10);


        $vacanciesEn = Vacancy::query()
            ->whereNotNull('title_en')
            ->whereNotNull('education_level_en')
            ->whereNotNull('contract_type_en')
            ->whereNotNull('application_email_en')
            ->select('id', 'title_en as title', 'education_level_en as education_level', 'contract_type_en as contract_type', 'application_email_en as application_email', 'status')
            ->orderBy('created_at', 'ASC')
            ->paginate(10);

        $vacanciesRu = Vacancy::query()
            ->whereNotNull('title_ru')
            ->whereNotNull('education_level_ru')
            ->whereNotNull('contract_type_ru')
            ->whereNotNull('application_email_ru')
            ->select('id', 'title_ru as title', 'education_level_ru as education_level', 'contract_type_ru as contract_type', 'application_email_ru as application_email', 'status')
            ->orderBy('created_at', 'ASC')
            ->paginate(10);

        return view('backend.pages.vacancy.list', compact('vacanciesAz', 'vacanciesEn', 'vacanciesRu'));
    }

    public function create()
    {
        return view('backend.pages.vacancy.create');
    }

    public function store(VacancyRequest $request)
    {
        $validated = $request->validated();

        Vacancy::create($validated);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function show($id)
    {
        $vacancy = Vacancy::findOrFail($id);

        return view('backend.pages.vacancy.show', compact('vacancy'));
    }

    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);

        return view('backend.pages.vacancy.edit', compact('vacancy'));
    }

    public function update(UpdateVacancyRequest $request, $id)
    {
        $vacancy = Vacancy::findOrFail($id);

        $validated = $request->validated();

        $vacancy->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.vacancy.list')->with($notification);
    }

    public function delete($id)
    {
        Vacancy::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
