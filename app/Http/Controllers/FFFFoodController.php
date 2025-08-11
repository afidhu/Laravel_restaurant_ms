<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function AdminDashboard(){
          $myfood = Food::all();
         return view('admin.dashboard', compact('myfood'));
    }
    public function FoodForm(){
         return view('admin.food');
    }
}
