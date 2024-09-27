<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderDetailController extends Controller
{
    public function order_detail($order)
    {
        $details = OrderDetail::where('order_id', $order)->get();
        
        return view('order.order_detail', [
            'details' => $details,
        ]);
    }
}
