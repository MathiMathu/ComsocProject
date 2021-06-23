<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;
use App\Models\Event;
use App\Models\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class EventRegisterController extends Controller
{
    
    
    public function create()
    {
        $events = Event::all();
        return view('register_now_form',compact('events'));
    }
    public function getDisplay($id){
        //$users = DB::select('select * from users where active = ?', [1]);
        $users = DB::select('select date,event_name,id from events where id=?',[$id]);
        //$users =Event::find($id);
 
       return view('register_now_form', ['users' => $users]);
     //return view('register_now_form',compact('users'));

    }
    public function store30(Request $request)
    {
        $this->validate($request,[
            'event_id' => ['string', 'max:255'],
            'event_name' => ['string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'regNo' => ['required', 'string','min:11','max:12', 'regex:/[A-Z]/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'yos' => ['required', 'string', 'max:255']
            // 'message'  => ['string', 'max:255']
        ]);
        
        $students = DB::table('registers')
        ->where([['event_id',$request->event_id],['email',$request->email]])
        ->get();
        

        if($request->regNo == Auth::user()->regNo && $request->email == Auth::user()->email)
        {
            if ($students->isEmpty())
            {
                $event_register = new Register;

                $event_register->event_id = $request->event_id;
                $event_register->event_name = $request->event_name;
                $event_register->name = $request->name;
                $event_register->regNo = $request->regNo;
                $event_register->email = $request->email;
                $event_register->yos = $request->yos;
                $event_register->message = $request->message;
                $event_register->save();
                return redirect(route('events.index'));
            }
            else{
                return redirect()->back()->withErrors("Already Registered");
            }
            
        }
       
        else
        {
            return redirect()->back()->withErrors("Unmatched Details");
        }
        
        
    }

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

}
