<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    public function index11()
    {
        
        $userData = DB::table('users')
        //->leftJoin('profiles', 'profiles.id','users.id')
        ->where('users.id',Auth::user()->id)
        ->get();
      return view('profile')->with('userData', $userData);
    }

    public function edit11($id)
    {
        $users = User::find($id);
        return view('editprofile', compact('users'));
    }

    public function update11(Request $request, $id)
    {
        $profile = User::find($id);
        $profile->phone = $request->phone;
        $profile->profession = $request->profession;
        

        if($request->hasFile('profile')) {
            $image = $request->file('profile');
            $filename = $image->getClientOriginalName();
            $request->profile->storeAs('images',$filename,'public');
            // $image->move(public_path('images/services'), $filename);
            $profile->profile = $filename;
        }
    
        //Event::find(1)->update(['avatar'=> $filename]);
        //$event->avatar = $filename;
        $profile->save();
        $userData = DB::table('users')
        //->leftJoin('profiles', 'profiles.id','users.id')
        ->where('users.id',Auth::user()->id)
        ->get();
      return view('profile')->with('userData', $userData);
        //return view('profile');
    }

}
