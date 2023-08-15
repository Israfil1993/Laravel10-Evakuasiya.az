<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function list()
    {
        $faqsAz = Faq::query()
            ->whereNotNull('title_az')
            ->whereNotNull('description_az')
            ->select('id', 'title_az', 'description_az', 'status')
            ->orderBy('created_at', 'ASC')
            ->paginate(10);

        $faqsEn = Faq::query()
            ->whereNotNull('title_en')
            ->whereNotNull('description_en')
            ->select('id', 'title_en', 'description_en', 'status')
            ->orderBy('created_at', 'ASC')
            ->paginate(10);

        $faqsRu = Faq::query()
            ->whereNotNull('title_ru')
            ->whereNotNull('description_ru')
            ->select('id', 'title_ru', 'description_ru', 'status')
            ->orderBy('created_at', 'ASC')
            ->paginate(10);

        return view('backend.pages.faq.list', compact('faqsAz', 'faqsEn', 'faqsRu'));
    }

    public function create()
    {
        return view('backend.pages.faq.create');
    }

    public function store(FaqRequest $request)
    {
        $faq = $request->validated();

        Faq::create($faq);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);

        return view('backend.pages.faq.edit', compact('faq'));
    }

    public function update(UpdateFaqRequest $request, $id)
    {
        $faq = Faq::findOrFail($id);
        $validated = $request->validated();
        $faq->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.faq.list')->with($notification);
    }

    public function delete($id)
    {
        Faq::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
