<?php

namespace App\Http\Controllers;
use App\Models\Seminar;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SeminarController extends Controller
{
         
    public function index()
    {
        $userData = DB::table('users')
        //->leftJoin('profiles', 'profiles.id','users.id')
        ->where('users.id',Auth::user()->id)
        ->get();
        return view('seminar')->with('userData', $userData);
        //return view('seminar');
    }

    public function index1()
    {
        $seminars = Seminar::all();
        
        return view('view_seminar_registration', compact('seminars'));
    }
    
    public function create()
    {
        return view('seminarRegistration');
    }


    public function store5(Request $request)
    {
        
       $this->validate($request,[
            'RegistrationNo' => 'required',
            'Name' => 'required',
            'Email' => 'required',
            'Place' => 'required',
            'Language' => 'required',
            'Date' => 'required',
            
        ]);
        $seminar = new Seminar;

        $seminar->RegistrationNo = $request->RegistrationNo;
        $seminar->Name = $request->Name;
        $seminar->Email = $request->Email;
        $seminar->Place = $request->Place;
        // $seminar->Date = $request->Date;
        $seminar->Language = $request->Language;
        $seminar->Date = $request->Date;
        $seminar->save();
        return view('seminar');
    }
            // 'name' => ['required', 'string', 'max:255'],
            // 'regNo' => ['required', 'string','min:11','max:12', 'regex:/[A-Z]/','unique:users'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

    public function compute7(Request $request)
   {
    if($request->has('Language')  && empty($request->input('Place')))
    {
        $users = DB::table('seminars')
        ->whereDate('created_at','<=', $request->Date)
        ->where('Language',$request->Language)
        ->get();
    }  
        
    else if($request->has('Place') && empty($request->input('Language')))
    {
        $users = DB::table('seminars')
        ->whereDate('created_at','<=', $request->Date)
        ->where('Place',$request->Place)
        ->get();
    }  

    else
    {
        $users = DB::table('seminars')
                ->whereDate('created_at','<=', $request->Date)
                ->where('Place',$request->Place)
                ->where('Language',$request->Language)
                ->get();
    }
   
         return view('sort_seminar_registration', compact('users'));
     }   
     

 }
