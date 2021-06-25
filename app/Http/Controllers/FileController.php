<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallerie;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class FileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'filenames.*' => 'image|mimes:jpeg,jpg,png,gif,svg|max:3000',
                'Event_Name' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:500'],
                'date' => 'required'
        ]);

        $files = [];

        try{
            if($request->hasfile('filenames'))
            {
               foreach($request->file('filenames') as $file)
               {
                   $name = date('YmdHis').rand(10,99).'.'.$file->extension();
                   $file->storeAs('gallery',$name,'public');
                   // $file->storeAs('images', $name);
                   $files[] = $name;
               }
            }

            $file= new Gallerie();
            $file->filenames = $files;
            $file->Event_Name = $request->Event_Name;
            $file->description = $request->description;
            $file->date = $request->date;
            $file->save();
        }

         catch (QueryException $exception) {
            return redirect()->back()->withErrors("Cannot Upload more files ");
        }
        return redirect()->back()->withErrors('Images have been successfully added');


    }

    public function view()
    {
        $files = Gallerie::all();

        return view('gallery',compact('files'));
    }

    public function album($id)
    {
     $files = DB::select('select Event_Name,filenames,description,date from galleries where id=?',[$id]);


     return view('photo_album', ['files' => $files]);
    }

    public function index20()
    {
        $files = Gallerie::all();

        return view('view_uploaded_gallery',compact('files'));
    }


    public function delete20($id)
    {
        $files = Gallerie::find($id);
        $files->delete();

        return redirect('/view_gallery');
    }
}
