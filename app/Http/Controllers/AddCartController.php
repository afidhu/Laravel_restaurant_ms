<?php

namespace App\Http\Controllers;

use App\Models\AddCart;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cartItem = DB::table('add_carts')
            ->join('food', 'add_carts.food_id', '=', 'food.id')
            ->where('add_carts.user_id', Auth::id())
            ->select('add_carts.*', 'food.title', 'food.price', 'food.image')
            ->get();

        $countprice = DB::table('add_carts')
            ->where('add_carts.user_id', Auth::id())
            ->sum('total_price');

        return view('pages.cartview', compact('cartItem', 'countprice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // //
        // $validated = $request->validate([
        //     'user_id'       => 'required',
        //     'total_price'       => 'required',
        //     'food_id'       => 'required',
        //     'quantity'       => 'nullable',
        // ]);
        // $validated['user_id'] = Auth::id();
        // $validated['total_price'] = $validated['quantity']*$validated['price'];
        // AddCart::create($validated);

        // return redirect()->back();

        // $food = Food::find($food_id);
        // $quantity = 2; // Example

        // AddCart::create([
        //     'user_id' => Auth::id(),
        //     'food_id' => $food_id,
        //     'total_price' => $food->price * $quantity,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AddCart $addCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AddCart $addCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cartid)
    {
        //
        $cartId= AddCart::find($cartid);
        $validated =$request->validate([
            'quantity'=>'required',
        ]);

        ///HERE get food_id

        $foodId =Food::find($cartId->food_id);

        $cartId->total_price =$validated['quantity']*$foodId->price;
        $cartId->quantity = $validated['quantity'];
        $cartId->save();

        return redirect('cartview');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cartId){
        //
        $cartid = AddCart::find($cartId);
        $cartid->delete();
         return redirect('cartview');

    }



}
