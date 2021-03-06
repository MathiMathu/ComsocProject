<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Financialsupport;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TreasurerController extends Controller
{
    public function handleTreasurer()
    {
        $userData = DB::table('users')
        //->leftJoin('profiles', 'profiles.id','users.id')
        ->where('users.id',Auth::user()->id)
        ->get();
        $number = DB::table('financialsupports')->count();
        return view('handleTreasurer',compact('number'))->with('userData', $userData);
        //return view('handleTreasurer');
    }
}
