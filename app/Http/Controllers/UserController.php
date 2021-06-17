<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index21()
    {
        $users = User::all();
        
        return view('view_registered_users', compact('users'));
    }

    
    public function compute20(Request $request)
    {
          
        $students = DB::table('users')
              ->where('email','=', $request->search)
              ->get();
        
        return view('student_details', compact('students'));
    }    
}


