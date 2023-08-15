<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomeSliderRequest;
use App\Http\Requests\UpdateHomeSliderRequest;
use Illuminate\Http\Request;
use App\Models\HomeSlider;

class HomeSliderController extends Controller
{
    public function list()
    {
        $homeSlider = HomeSlider::paginate(10);

        return view('backend.pages.home_slider.list', compact('homeSlider'));
    }

    public function create()
    {
        return view('backend.pages.home_slider.create');
    }

    public function store(HomeSliderRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/sliders'), $imageName);
            $validated['image'] = $imageName;
        }

        HomeSlider::create($validated);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $homeSlider = HomeSlider::findOrFail($id);

        return view('backend.pages.home_slider.edit', compact('homeSlider'));
    }

    public function update(UpdateHomeSliderRequest $request, $id)
    {
        $previous_image = $request->previous_image;

        $slider = HomeSlider::find($id);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/sliders'), $imageName);
            $validated['image'] = $imageName;

            if (file_exists($previous_image))
            {
                unlink($previous_image);
            }
        }

        $slider->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.slider.list')->with($notification);
    }

    public function delete($id)
    {
        $homeSlider = HomeSlider::findOrFail($id);
        $image = $homeSlider->image;

        if (file_exists($image))
        {
            unlink($image);
        }

        HomeSlider::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
