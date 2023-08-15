<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\About;
use App\Models\CompanyLogoSlider;
use App\Models\Contact;
use App\Models\Customer_Testimonial;
use App\Models\Faq;
use App\Models\HomeSlider;
use App\Models\Post;
use App\Models\Services;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function contactForm(ContactFormRequest $request)
    {
        Contact::insert([
            'name'       => $request->name,
            'email'      => $request->email,
            'subject'    => $request->subject,
            'message'    => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Mesajınız uğurla göndərildi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function home()
    {
        $sliders = HomeSlider::query()
            ->where('status', 1)
            ->take(3)
            ->orderBy('id', 'ASC')
            ->get();

        $logosliders = CompanyLogoSlider::query()
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        $services = Services::query()
            ->where('status', 1)
            ->limit(6)
            ->orderBy('id', 'DESC')
            ->get();

        $faqs = Faq::query()
            ->where('status', 1)
            ->limit(12)
            ->orderBy('created_at', 'DESC')
            ->get();

        $customerTestimonial = Customer_Testimonial::query()
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        $posts = Post::query()
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view ('frontend.index',
            compact([

                'sliders',
                'logosliders',
                'services',
                'faqs',
                'customerTestimonial',
                'posts',
        ]));
    }
}
