<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerTestimonialRequest;
use App\Http\Requests\UpdateCustomerTestimonialRequest;
use App\Models\Customer_Testimonial;
use Illuminate\Http\Request;

class CustomerTestimonialController extends Controller
{
    public function list()
    {

        $testimonialAz = Customer_Testimonial::query()
            ->whereNotNull('fullname_az')
            ->whereNotNull('feedback_az')
            ->select('id', 'fullname_az', 'feedback_az', 'image', 'status')
            ->orderBy('created_at', 'ASC')
            ->paginate(10);

        $testimonialEn = Customer_Testimonial::query()
            ->whereNotNull('fullname_en')
            ->whereNotNull('feedback_en')
            ->select('id', 'fullname_en', 'feedback_en', 'image', 'status')
            ->orderBy('created_at', 'ASC')
            ->paginate(10);

        $testimonialRu = Customer_Testimonial::query()
            ->whereNotNull('fullname_ru')
            ->whereNotNull('feedback_ru')
            ->select('id', 'fullname_ru', 'feedback_ru', 'image', 'status')
            ->orderBy('created_at', 'ASC')
            ->paginate(10);


        return view('backend.pages.testimonials.list',
            compact([
                'testimonialAz',
                'testimonialEn',
                'testimonialRu'
            ]));
    }

    public function create()
    {
        return view('backend.pages.testimonials.create');
    }

    public function store(CustomerTestimonialRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/testimonials'), $imageName);
            $validated['image'] = $imageName;
        }

        Customer_Testimonial::create($validated);

        $notification = array(
            'message' => 'Məlumat Əlavə Olundu',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function show($id)
    {
        $testimonial = Customer_Testimonial::findOrFail($id);

        return view('backend.pages.testimonials.show', compact('testimonial'));
    }

    public function edit($id)
    {
        $testimonial = Customer_Testimonial::findOrFail($id);

        return view('backend.pages.testimonials.edit', compact('testimonial'));
    }

    public function update(UpdateCustomerTestimonialRequest $request, $id)
    {
        $previous_image = $request->previous_image;
        $testimonials = Customer_Testimonial::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/testimonials'), $imageName);
            $validated['image'] = $imageName;

            if (file_exists($previous_image))
            {
                unlink($previous_image);
            }
        }

        $testimonials->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.testimonial.list')->with($notification);
    }

    public function delete($id)
    {
        $testimonials = Customer_Testimonial::findOrFail($id);
        $image = $testimonials->image;

        if (file_exists($image))
        {
            unlink($image);
        }

        Customer_Testimonial::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Məlumat  silindi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
