<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ordersView() {
        return view('user.orders');
    }

    public function statusOrderView() {
        return view('user.statusOrder');
    }
}
