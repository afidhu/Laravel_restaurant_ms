<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function ShowOrders(){

        $allorders =Orders::all();
        return view('admin.reservesations', compact('allorders'));
    }
}
