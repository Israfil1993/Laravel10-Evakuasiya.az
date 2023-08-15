<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function list()
    {
        $settingsAz = Setting::query()
            ->select('id', 'key_az as key', 'value_az as value', 'image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $settingsEn = Setting:: query()
            ->select('id', 'key_en as key', 'value_en as value', 'image', 'status')
            ->orderBy('id', 'desc')
            ->paginate(10);

        $settingsRu = Setting::query()
            ->select('id', 'key_ru as key', 'value_ru as value', 'image', 'status')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('backend.pages.setting.list',
            compact([
                'settingsAz',
                'settingsEn',
                'settingsRu'
            ]));
    }

    public function create()
    {
        return view('backend.pages.setting.create');
    }

    public function store(SettingsRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/setting'), $imageName);
            $validated['image'] = $imageName;
        }

        Setting::create($validated);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $settings = Setting::findOrFail($id);

        return view('backend.pages.setting.edit', compact('settings'));
    }

    public function update(UpdateSettingsRequest $request, $id)
    {
        $previous_image = $request->previous_image;

        $settings = Setting::findOrFail($id);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/setting'), $imageName);
            $validated['image'] = $imageName;

            if (file_exists($previous_image))
            {
                unlink($previous_image);
            }
        }

        $settings->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.setting.list')->with($notification);
    }

    public function delete($id)
    {
        $settings = Setting::findOrFail($id);

        $image = $settings->image;

        if (file_exists($image))
        {
            unlink($image);
        }

        Setting::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
