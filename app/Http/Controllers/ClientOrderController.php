<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientOrderController extends Controller
{

    public function checkout (Request $request) {
        $this->validate($request,[
            'category_id' => 'required|integer',
            'quantity' => 'required',
            'image'=>'required|image',
            'cost'=>'required',
        ]);
        
        $order= new Order;
        $order->category_id= $request->category_id;
        $order->quantity= $request->quantity;
        $order->image= $request->image;
        $order->cost= $request->cost;
        $vatInt= intval(str_replace(',', '', ($order->cost))) * 0.07;
        $vat= number_format($vatInt, 2, '.', ',');
        $totalInt= intval(str_replace(',', '', ($order->cost))) + $vatInt;
        $total= number_format($totalInt, 2, '.', ',');

        Session::flash('success', 'Order successfully made. Kindly proceed to checkout.');

        return view('orders.checkout', ['order'=>$order, 'vat'=>$vat, 'total'=>$total]);
    }

    public function store (Request $request) {
        // $this->validate($request,[
        //     'name'=>'required',
        //     'email'=>'required',
        //     'phone_number'=>'required',
        // ]);

        $order= new Order;
        $order->category_id= $request->category_id;
        $order->quantity= $request->quantity;
        $order->image= $request->image;
        $order->name= $request->name;
        $order->email= $request->email;
        $order->total= $request->total;
        $order->street= $request->street;
        $order->phone_number= $request->phone_number;
        $order->city= $request->city;
        $order->state= $request->state;

        $order->save();

        Session::flash('success', 'Checkout successful, Thank you for your order.');

        return redirect('/');
    }
}
