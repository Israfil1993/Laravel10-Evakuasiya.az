<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function show()
    {
        return view('frontend.pages.contact');
    }

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
}
