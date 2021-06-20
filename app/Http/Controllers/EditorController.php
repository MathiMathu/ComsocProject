<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class EditorController extends Controller
{
    public function handleEditor()
    {    $userData = DB::table('users')
        //->leftJoin('profiles', 'profiles.id','users.id')
        ->where('users.id',Auth::user()->id)
        ->get();
        $number = DB::table('articles')->count();
        return view('handleEditor',compact('number'))->with('userData', $userData);
        //return view('handleEditor');
    } 
}
