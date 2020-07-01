<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('backend.orders.index', compact('orders'));
    }

    public function details(Order $order)
    {
        return view('backend.orders.details', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $order->status = $request->status;
        $order->save();

        //Send Notification

        return back()->with('success', 'Order status updated successfully');
    }
}
