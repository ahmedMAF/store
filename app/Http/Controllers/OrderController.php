<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function orderPage($id){
        return view("Home\order" , compact("id"));
    }
    public function order(Request $request){
        $order = new Order();
        $order->quantity = $request->quantity;
        $order->address = $request->address;
        $order->user_id = Auth::id();
        $order->product_id = $request->idProduct;
        $order->save();
        return redirect()->back();
    }
    public function showOrder(){
        $orders = Order::all();
        return view("admin\order" , compact("orders"));
    }
}
