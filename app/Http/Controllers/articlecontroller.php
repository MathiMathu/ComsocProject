<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class articlecontroller extends Controller
{
    public function article(Request $request)
    {
        //dd($request->all());
        $article =new Article;

        $validated = $request->validate([
            'RegistrationNo' => 'required|max:100|min:5',
            'Name' => 'required|max:100|min:5',
            'Title' => 'required|max:100|min:5',
            'description' => 'required|max:100|min:5',
            'Article' => 'required',
        ]);
        $article->RegistrationNo=$request->RegistrationNo;
        $article->Name=$request->Name;
        $article->Title=$request->Title;
        $article->description=$request->description;
        $article->action=$request->action;

        $filename = $request->Article->getClientOriginalName();
        $article->article = $filename;

        $request->Article->storeAs('images',$filename,'public');
        $article->save();
    }
    public function index()
    {
        $article = Article::all();

        return view('view_article', compact('article'));
    }
    public function check($id)
    {

        $article = Article::find($id);

        return view('/plagisirmcheck', compact('article'));
    }
    public function update10(Request $request, $id)
    {
        $this->validate($request,[
         'action' => 'required',
        ]);

        $article = Article::find($id);

        $article->action = $request->action;



        $article->save();
        return redirect()->back();
    }
    public function downloadAudiobook($id)
    {


            // $userID = Auth::user()->id;
            $download = Article::where(['id' => $id, 'Article' => $id])->first();
            // if (empty($download->id))
            // {
            //     $download = new Article;
            //     $download->id = $id;
            //     $download->article = $id;
            //     $download->save();
            // }

            $audiobook = Article::find($id);
            $download = public_path().'/storage/images/' . $audiobook->article;
            return response()->download($download);





    }
}
