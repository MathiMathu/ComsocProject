<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;
use App\Models\Event;

class EventRegisterController extends Controller
{
    public function create()
    {
        $events = Event::all();
        return view('register_now_form',compact('events'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'event_name' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'regNo' => ['required', 'string','min:11','max:12', 'regex:/[A-Z]/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'yos' => ['required', 'string', 'max:255']
            // 'message'  => ['string', 'max:255']
        ]);    

        $event_register = new Register;
        
        $event_register->event_name = $request->event_name;
        $event_register->name = $request->name;
        $event_register->regNo = $request->regNo;
        $event_register->email = $request->email;
        $event_register->yos = $request->yos;
        $event_register->message = $request->message;
        $event_register->save();
        return redirect(route('events.index'));


        
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
