<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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
        $article->article=$request->Article;
        $article->save();
    }
}
