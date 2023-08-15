<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        $orders = Order::query()
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('backend.pages.order.list', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('backend.pages.order.show', compact('order'));
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        $notification = array(
            'message' => 'Mesajınız uğurla göndərildi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
