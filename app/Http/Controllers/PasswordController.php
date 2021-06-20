<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordController extends Controller
{
    public function editpassword($id)
    {
        $user = User::find($id);
        return view('changepassword', compact('user'));
    }

    public function updatepassword(Request $request, $id)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::find($id);
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
    
        $user->save();
        return redirect()->route('index21');
    }

}
