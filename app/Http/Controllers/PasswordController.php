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
        if($user->is_admin == 0)
        {
            return view('changepassword', compact('user'));
        }
        else{
            return view('rolechange', compact('user'));
        }
        
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

    public function updatepassword3(Request $request, $id)
    {
        $this->validate($request,[  
            'name' => ['required', 'string', 'max:255'],
            'regNo' => ['required', 'string','min:11','max:12', 'regex:/[A-Z]/'],
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::find($id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->regNo = $request->regNo;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->profession = $request->profession;
        $user->password = Hash::make($request->password);
    
        if($request->hasFile('profile')) {
            $image = $request->file('profile');
            $filename = $image->getClientOriginalName();
            $request->profile->storeAs('images',$filename,'public');
            // $image->move(public_path('images/services'), $filename);
            $user->profile = $filename;
        }
    
        //Event::find(1)->update(['avatar'=> $filename]);
        //$event->avatar = $filename;
       
        $user->save();
        return redirect()->route('index21');
    }

    public function deletepassword($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('index21');
    }
}
