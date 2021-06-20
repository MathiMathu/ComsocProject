<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;
use Carbon\Carbon;
use App\Models\Event;

class ViewRegisteredStudentController extends Controller
{
    public function index()
    {
        $registers = Register::all();
        
        return view('view_registered_students', compact('registers'));
    }

    
    public function compute(Request $request)
    {
          
       $students = DB::table('registers')
              ->where('event_id', $request->e_id)
              ->whereDate('created_at','<=', $request->date)
              ->get();
        
        return view('sort_registered_students', compact('students'));
    }    
}

