<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CorporativeRequest;
use App\Http\Requests\UpdateCorporativeRequest;
use App\Models\Corporative;
use Illuminate\Http\Request;

class CorporativeController extends Controller
{
    public function list()
    {
        $corporativesAz = Corporative::query()
            ->whereNotNull('title_az')
            ->whereNotNull('description_az')
            ->select('id', 'title_az', 'description_az', 'image','status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $corporativesEn = Corporative::query()
            ->whereNotNull('title_en')
            ->whereNotNull('description_en')
            ->select('id', 'title_en', 'description_en','image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $corporativesRu = Corporative::query()
            ->whereNotNull('title_ru')
            ->whereNotNull('description_ru')
            ->select('id', 'title_ru', 'description_ru','image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('backend.pages.corporative.list', compact('corporativesAz', 'corporativesEn', 'corporativesRu'));
    }

    public function create()
    {
        return view('backend.pages.corporative.create');
    }

    public function store(CorporativeRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/corporative'), $imageName);
            $validated['image'] = $imageName;
        }

        Corporative::create($validated);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $corporatives =Corporative::findOrFail($id);

        return view('backend.pages.corporative.edit', compact('corporatives'));
    }

    public function update(UpdateCorporativeRequest $request, $id)
    {
        $previous_image = $request->previous_image;

        $corporatives = Corporative::findOrFail($id);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/corporative'), $imageName);
            $validated['image'] = $imageName;

            if (file_exists($previous_image))
            {
                unlink($previous_image);
            }
        }

        $corporatives->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.corporative.list')->with($notification);
    }

    public function delete($id)
    {
        $corporatives = Corporative::findOrFail($id);

        $image = $corporatives->image;

        if (file_exists($image))
        {
            unlink($image);
        }

        Corporative::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
