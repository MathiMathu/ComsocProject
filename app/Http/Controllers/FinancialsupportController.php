<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Financialsupport;

class FinancialsupportController extends Controller
{
    
    public function storeFinancialsupport(Request $request){

       $financialsupport_obj= new Financialsupport;

        $financialsupport_obj->RegistrationNo=$request->RegistrationNo;
        $financialsupport_obj->Name=$request->Name;
        $financialsupport_obj->MonthlyIncome=$request->MonthlyIncome;
        $financialsupport_obj->NoOfSiblings=$request->NoOfSiblings;
        $financialsupport_obj->FatherName=$request->FatherName;
        $financialsupport_obj->FatherOccupation=$request->FatherOccupation;
        $financialsupport_obj->MotherName=$request->MotherName;
        $financialsupport_obj->MotherOccupation=$request->MotherOccupation;
        
        $financialsupport_obj->save();

        return redirect()->back();
       
    }
    //
}
