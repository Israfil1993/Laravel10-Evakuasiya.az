<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class Our_ServicesController extends Controller
{

    public function list()
    {
        $languages = ['az', 'en', 'ru'];
        $services = [];

        foreach ($languages as $lang) {
            $services[$lang] = Services::query()
                ->whereNotNull("title_$lang")
                ->whereNotNull("text_$lang")
                ->select('id', "title_$lang", "text_$lang", 'icon', 'status')
                ->orderBy('created_at', 'ASC')
                ->paginate(10);
        }

        return view('backend.pages.our_services.list', compact('services'));
    }

    public function create()
    {
        return view('backend.pages.our_services.create');
    }

    public function store(ServicesRequest $request)
    {
        $services = $request->validated();

        Services::create($services);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $services = Services::findOrFail($id);

        return view('backend.pages.our_services.edit', compact('services'));
    }

    public function update(UpdateServicesRequest $request, $id)
    {
        $services = Services::findOrFail($id);

        $validated = $request->validated();

        $services->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );


        return redirect()->route('admin.our_services.list')->with($notification);
    }

    public function delete($id)
    {
        Services::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
