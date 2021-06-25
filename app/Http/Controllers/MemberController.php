<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    public function index()
    {
        // $members = Member::latest()->value('year');
        $members = Member::max('year');
        $students = DB::table('members')
              ->where('year', $members)
              ->get();

        return view('members', compact('students'));
    }

    public function index1()
    {
        $members = Member::all();

        return view('view_members',compact('members'));
    }


    public function create()
    {
        return view('add_member');
    }

    public function store2(Request $request)
    {
       $this->validate($request,[
            'year' => 'required',
            'name' => 'required',
            'image_name' => 'required',
            'role' => 'required',
            'yearofstudy' => 'required',
        ]);
        $member = new Member;

        $member->year = $request->year;
        $member->name = $request->name;
        $member->role = $request->role;
        $member->yearofstudy = $request->yearofstudy;

        $filename = $request->image_name->getClientOriginalName();
        $member->image_name = $filename;

        $request->image_name->storeAs('images',$filename,'public');
        $member->save();
        return view('add_member');
    }

    public function compute1(Request $request)
    {

          $students = DB::table('members')
              ->where('year', $request->year)
              ->get();

        return view('members', compact('students'));
    }

    public function edit2($id)
    {
        $member = Member::find($id);
        return view('edit_members', compact('member'));
    }

    public function update2(Request $request, $id)
    {
        $this->validate($request,[
            'year' => 'required',
            'name' => 'required',
            'role' => 'required',
            'yearofstudy' => 'required',
        ]);
        $member = Member::find($id);
        $member->year = $request->year;
        $member->name = $request->name;
        $member->role = $request->role;
        $member->yearofstudy = $request->yearofstudy;

        if($request->hasFile('image_name')) {
            $image = $request->file('image_name');
            $filename = $image->getClientOriginalName();
            $member->image_name = $filename;
            $request->image_name->storeAs('images',$filename,'public');
        }


        $member->save();
        return redirect()->route('index1');
    }

    public function destroy2($id)
    {
        $members = Member::find($id);
        $members->delete();

        return redirect('/view_members');
    }
}
