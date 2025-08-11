<?php

namespace App\Http\Controllers;

use App\Models\AddCart;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function  Homepage()
    {
        $menu = Food::all();

        $user_id = Auth::id() ?? 0;

        $cartView = AddCart::where('user_id', $user_id)->count();

        return view('pages.Home', compact('menu', 'cartView'));
    }

    public function RedirectPage()
    {

        $usertType = Auth::user()->user_type;

        if ($usertType == '1') {
            return redirect('foods');
        } else {

            $menu = Food::all();

            $user_id = Auth::id() ?? 0;

            $cartView = AddCart::where('user_id', $user_id)->count();
            return view('pages.Home', compact('menu', 'cartView'));
        }
    }

    public function MenuPage()
    {
        $menu = Food::all();
        return view('pages.menu', compact('menu'));
    }

    public function AddToCart(Request $request, $food_id)
    {
        if (Auth::id()) {

             $food = Food::find($food_id);
        $validated = $request->validate([
            'quantity'       => 'required',
        ]);
        $validated['user_id'] = Auth::id();
        $validated['food_id'] = $food->id;
        $validated['total_price'] = $validated['quantity']*$food->price;;
        //  dd($validated);
        AddCart::create($validated);

        return redirect()->back();
        } else {
            return redirect('/login');
        }
    }
}
