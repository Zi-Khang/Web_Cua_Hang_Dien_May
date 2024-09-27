<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order_index()
    {
        $cus_id = Auth::user()->id;
        $orders = Order::where('user_id', $cus_id)->get();
        
        return view('order.index', [
            'orders' => $orders,
        ]);
    }
}
