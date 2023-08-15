<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyLogoSliderRequest;
use App\Models\CompanyLogoSlider;
use Illuminate\Http\Request;

class CompanyLogoSliderController extends Controller
{

    public function list()
    {
        $companyLogoSlider = CompanyLogoSlider::paginate(10);

        return view('backend.pages.company_logo_slider.list', compact('companyLogoSlider'));
    }

    public function create()
    {
        return view('backend.pages.company_logo_slider.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:0,1',
        ]);

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/company_logo'), $imageName);
            $validatedData['image'] = 'uploads/company_logo/'.$imageName;
        }

        $slug = str()->slug($validatedData['name']);

        $companyLogoSlider = new CompanyLogoSlider([
            'name' => $validatedData['name'],
            'slug' => $slug,
            'image' => $validatedData['image'],
            'status' => $validatedData['status'],
        ]);

        $companyLogoSlider->save();

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $companySlider = CompanyLogoSlider::findOrFail($id);

        return view('backend.pages.company_logo_slider.edit', compact('companySlider'));
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
            'status' => 'required|in:0,1',
        ]);

        $company = CompanyLogoSlider::findOrFail($id);

        $company->name = $validatedData['name'];
        $company->status = $validatedData['status'];

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/company_logo'), $imageName);
            $company->image = 'uploads/company_logo/' . $imageName;
        }

        $company->save();

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.partnyorlar.list')->with($notification);
    }

    public function delete($id)

    {
        $companySlider = CompanyLogoSlider::findOrFail($id);
        $image = $companySlider->image;

        if (file_exists($image))
        {
            unlink($image);
        }

        CompanyLogoSlider::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
