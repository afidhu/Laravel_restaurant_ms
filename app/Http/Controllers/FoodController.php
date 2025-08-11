<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $food = Food::all();
    return view('admin.dashboard', compact('food'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function Create()
    {
        //

        return view('admin.food');
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    $validated = $request->validate([
        'title'       => 'required',
        'price'       => 'required|numeric',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'description' => 'required',
    ]);

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $photoName = uniqid().'_'.time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('upload/posts');

        $file->move($destinationPath, $photoName);
        $validated['image'] = $photoName;
    }

    Food::create($validated);

    return redirect('foods')->with('success', 'Food added successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $foodId =Food::find($id);
        return view('admin.edit', compact('foodId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $foodId =Food::find($id);
         $validated = $request->validate([
        'title'       => 'required',
        'price'       => 'required|numeric',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'description' => 'required',
    ]);

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $photoName = uniqid().'_'.time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('upload/posts');

        $file->move($destinationPath, $photoName);
        $validated['image'] = $photoName;
    }

    $foodId->update($validated);
    return redirect('foods');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $foodId =Food::find($id);
        $foodId->delete();
         return redirect('foods');
    }
}
