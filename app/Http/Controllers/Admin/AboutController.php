<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function list()
    {
        $aboutsAz = About::query()
            ->whereNotNull('title_az')
            ->whereNotNull('description_az')
            ->select('id', 'title_az', 'description_az', 'image','status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $aboutsEn = About::query()
            ->whereNotNull('title_en')
            ->whereNotNull('description_en')
            ->select('id', 'title_en', 'description_en','image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $aboutsRu = About::query()
            ->whereNotNull('title_ru')
            ->whereNotNull('description_ru')
            ->select('id', 'title_ru', 'description_ru','image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('backend.pages.about.list', compact('aboutsAz', 'aboutsEn', 'aboutsRu'));
    }

    public function create()
    {
        return view('backend.pages.about.create');
    }

    public function store(AboutRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/about'), $imageName);
            $validated['image'] = $imageName;
        }

        About::create($validated);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);

        return view('backend.pages.about.edit', compact('about'));
    }

    public function update(UpdateAboutRequest $request, $id)
    {
        $previous_image = $request->previous_image;

        $about = About::findOrFail($id);

        if (file_exists($previous_image))
        {
            unlink($previous_image);
        }

        $validated = $request->validated();

        $about->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.about.list')->with($notification);
    }

    public function delete($id)
    {
        About::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
