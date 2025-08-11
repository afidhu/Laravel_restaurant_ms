<?php

namespace App\Http\Controllers;

use App\Models\AddCart;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //
    public function Mkepayment()
    {

        $cartItems = AddCart::where('user_id', Auth::id())->get();
        $totalPrice = $cartItems->sum('total_price');


        return view('pages.checkout', compact('cartItems', 'totalPrice'));
    }

    public function MakeOrder(Request $request){
        $user = Auth::user();
        $userName = $user->name;
        $userId =Auth::Id();

        $validated =$request->validate([
            'amount'=>'required',
            'phone_number'=>'required',

        ]);
        $validated['name'] =$userName;

        Orders::create($validated);
        AddCart::where('user_id', $userId)->delete();
        return redirect('/');


    }
}

