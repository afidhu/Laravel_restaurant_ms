<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function UsersPage(){
        $alluser =User::all();
        return view('admin.users', compact('alluser'));
    }

    public function DeleteUser($id){
        $user =User::find($id);
        $user->delete();
        return redirect('redirects');
    }
}
