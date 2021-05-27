<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $arts = Article::all(); 
        $tags = Tag::all(); 

        return view('welcome', compact('arts', 'tags')); 
    }

    public function showart(Article $art){
        //dd($art); 
        //$art = Article::where('id', $art); 
        return view('showart', compact('art')); 
    }
    public function showtag(Tag $tag){
        return view('showtag', compact('tag')); 
    }
}
