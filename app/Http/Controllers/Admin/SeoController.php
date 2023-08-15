<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeoRequest;
use App\Http\Requests\UpdateSeoRequest;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function list()
    {
        $seos = Seo::paginate(10);

        return view('backend.pages.seo.list', compact('seos'));
    }

    public function create()
    {
        return view('backend.pages.seo.create');
    }

    public function store(SeoRequest $request)

    {
        $validated = $request->validated();

        Seo::create($validated);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $seo = Seo::findOrFail($id);

        return view('backend.pages.seo.edit', compact('seo'));
    }

    public function update(UpdateSeoRequest $request, $id)
    {
        $seo = Seo::findOrFail($id);
        $validated = $request->validated();

        $seo->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.seo.list')->with($notification);
    }

    public function delete($id)
    {
       Seo::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
