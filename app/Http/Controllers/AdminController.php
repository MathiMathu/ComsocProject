<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    public function handleAdmin()
    {
        $userData = DB::table('users')
        //->leftJoin('profiles', 'profiles.id','users.id')
        ->where('users.id',Auth::user()->id)
        ->get();
        $number1 = DB::table('users')->count();
        $number2 = DB::table('events')->count();
        $number3 = DB::table('seminars')->count();
        $number4 = DB::table('csparks')->count();
        return view('admin',compact('number1','number2','number3','number4'))->with('userData', $userData);
    } 
}
