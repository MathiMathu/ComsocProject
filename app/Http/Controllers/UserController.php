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

    public function index()
    {
        $users = User::whereNull('approved_at')->get();

        return view('users', compact('users'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('User approved successfully');
    }
}


