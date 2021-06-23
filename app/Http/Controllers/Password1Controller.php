<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Password1Controller extends Controller
{
    public function changepassword1($id)
    {
        $user = User::find($id);
        return view('changepassword1', compact('user'));
    }

   
    public function updatepassword1(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect()->back()->withErrors("Password Successfully Changed");
    }
}
