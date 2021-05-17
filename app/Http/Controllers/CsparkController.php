<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cspark;
class CsparkController extends Controller
{
    public function addCspark(){

    }
    
    public function storeCspark(Request $request){


        $cspark_obj=new Cspark;

        $cspark_obj->registration_number=$request->registration_number;
        $cspark_obj->reason_for_booking=$request->reason;
        $cspark_obj->booking_date=$request->date;
        $cspark_obj->booking_time=$request->time;
        $cspark_obj->duration=$request->duration;
  

        $cspark_obj->save();

        return redirect()->back();

    }
    //
}
