<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class AdminController extends Controller
{
    //
    public function SearchFood(Request $request)
{
    $validated = $request->validate([
        'title' => 'nullable|string|max:255',
    ]);

    $query = Food::query();

    if (!empty($validated['title'])) {
        $query->where('title', 'like', '%' . $validated['title'] . '%');
    }

    $foodResult = $query->get();

    return view('admin.searchResualt', compact('foodResult'));
}

}
