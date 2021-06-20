<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FestivalGallery;
use Illuminate\Support\Facades\DB;

class FestivalController extends Controller
{
    public function index()
    {
        $data = FestivalGallery::all();

        return view('view_festival_gallery', compact('data'));
    }
    public function festival()
    {
        $image = FestivalGallery::all();

        return view('festival', compact('image'));
    }
    public function store(Request $request)
    {
        //dd($request->all());


        $this ->validate( $request,[
            'year' => 'required',
            'title' => 'required',
           'filename'=>'required',
           'filename.*'=>'image|mimes:jpeg,jpg,png,gif,svg|max:2048'

        ]);
        if($request->hasFile('filename')){
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/',$name);
                $data[]=$name;

            }

        }
        $upload_model= new FestivalGallery;
        $upload_model->date=$request->year;
        $upload_model->title=$request->title;
        $upload_model->filename=json_encode($data);
        $upload_model->save();
        return back()->with('success','Your images has been successfully');
    }

    public function gallery($id)
    {

        $image = FestivalGallery::all()->where('id',$id);
        // $document = FestivalGallery::where('date', $slug)->firstOrFail();

        return view('/view_festival_image', compact('image'));
    }
    public function delete1($id)
    {
        $post = FestivalGallery::find($id);
        $post->delete();
        //redirect to
        return redirect()->back();
    }
}
