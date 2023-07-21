<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Show index
    public function index(){
        $orders=order::get()->all();
        $data=compact('orders');
        return view('backend.order')->with($data);
    }

    // Order View
    public function orderView(){
        return view('backend.orderview');
    }
}
