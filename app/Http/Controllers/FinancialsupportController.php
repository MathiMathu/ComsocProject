<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Financialsupport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class FinancialsupportController extends Controller
{
    
   
   
     public function index()
    {
        $finances = Financialsupport::all();
        
        return view('view_financeSupport', compact('finances'));
    }

    
    
    public function storeFinancialsupport(Request $request)
    {

        $this->validate($request,[
            
            'Name' => ['required', 'string','regex:/[A-Z]/','regex:/^[a-zA-Z]+$/u', 'max:255'],
            'RegistrationNo' => ['required', 'string','min:11','max:12', 'regex:/[A-Z]/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            
           
        ]);
    if($request->RegistrationNo == Auth::user()->regNo && $request->email == Auth::user()->email)
     {
        
        
       $financialsupport_obj= new Financialsupport;

        $financialsupport_obj->RegistrationNo=$request->RegistrationNo;
        $financialsupport_obj->Name=$request->Name;
        $financialsupport_obj->email=$request->email;
        $financialsupport_obj->MonthlyIncome=$request->MonthlyIncome;
        $financialsupport_obj->NoOfSiblings=$request->NoOfSiblings;
        $financialsupport_obj->FatherName=$request->FatherName;
        $financialsupport_obj->FatherOccupation=$request->FatherOccupation;
        $financialsupport_obj->MotherName=$request->MotherName;
        $financialsupport_obj->MotherOccupation=$request->MotherOccupation;
        $financialsupport_obj->action=$request->action;

        $financialsupport_obj->save();

        return redirect()->back()->withErrors('Successful Registration');
     }
    else
    {
        return redirect()->back()->withErrors("Unmatched Details");
    }  
       
    }

    public function compute4(Request $request)
    {
          
        if(empty($request->Date)) 
        {
           $students = DB::table('financialsupports')
           ->where('MonthlyIncome','<=', $request->MonthlyIncome)
           ->get();
        }
        else if(empty($request->MonthlyIncome)) 
        {
           $students = DB::table('financialsupports')
           ->whereDate('created_at','>=', $request->Date)
           ->get();
        }
        else
        {
           $students = DB::table('financialsupports')
               ->where('MonthlyIncome','<=', $request->MonthlyIncome)
               ->whereDate('created_at','>=', $request->Date)
               ->get();
        }
            
           return view('sort_financial_students', compact('students'));
    }   
    //
    public function edit6($id)
    {
        $finance = Financialsupport::find($id);
        return view('financeSelected', compact('finance'));
    }

    public function update6(Request $request, $id)
    {
        $this->validate($request,[
            
            'action' => 'required',
        ]);    
            
        $finance = Financialsupport::find($id);
        $finance->RegistrationNo = $request->RegistrationNo;
        $finance->action = $request->action;
        
    
       
        $finance->save();
        return redirect()->back();
    }

    public function index7()
    {
        $finances = Financialsupport::orderBy('created_at', 'ASC')
        ->where('action','Selected')
        ->get(); 
          
        return view('view_financeSupport', compact('finances'));
    }


}
