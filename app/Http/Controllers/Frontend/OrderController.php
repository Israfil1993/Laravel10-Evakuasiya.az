<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function showOrder()
    {
        return view('frontend.pages.order');
    }

    public function orderForm(OrderRequest $request)
    {
        Order::insert([
            'name'          => $request->name,
            'surname'       => $request->surname,
            'first_address' => $request->first_address,
            'last_address'  => $request->last_address,
            'phone'         => $request->phone,
            'time' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Mesajınız uğurla göndərildi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
