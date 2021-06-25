<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cspark;
use Illuminate\Support\Facades\DB;

class CsparkController extends Controller
{
    public function index()
    {

        $bookings = Cspark::all();

        return view('view_park_bookings', compact('bookings'));
    }

    public function storeCspark(Request $request)
    {
       
        $cspark_obj=new Cspark;

        $cspark_obj->registration_number=$request->registration_number;
        $cspark_obj->reason_for_booking=$request->reason;
        $cspark_obj->booking_date=$request->date;
        $cspark_obj->booking_time=$request->time;
        $cspark_obj->duration=$request->duration;
        $cspark_obj->email=$request->email;
        $cspark_obj->action=$request->action;


        $website_info = Cspark::where([
            ['booking_date', '=', $request->date],
            ['booking_time', '=', $request->time]
        ])->first();

        if ($website_info != null) {
            return back()->with('success','Sorry..!The Park is Already Booked');
        } else {
            $cspark_obj->save();
            return redirect()->back();
        }




    }
    //
    public function compute5(Request $request)
    {

          $students = DB::table('csparks')
              ->whereDate('booking_date','=', $request->search)
              ->get();

        return view('sort_cspark_booking', compact('students'));
    }

    public function edit8($id)
    {
        $cspark = Cspark::find($id);
        return view('BookingSelected', compact('cspark'));
    }

    public function update8(Request $request, $id)
    {
        $this->validate($request,[
         'action' => 'required',
        ]);

        $cspark = Cspark::find($id);
        $cspark->registration_number = $request->registration_number;
        $cspark->action = $request->action;



        $cspark->save();
        return redirect()->back();
    }





}
