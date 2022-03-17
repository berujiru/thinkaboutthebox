<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
	public function TrackOrder()
    {
        // $order = Order::find($ordercode);
        return view('order');
    }
    // public function TrackOrder($ordercode)
    // {
    //     $order = Order::find($ordercode);
    //     return view('order');
    // }
}
	