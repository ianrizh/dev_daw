<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'This is Article Page!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

 

 
}
