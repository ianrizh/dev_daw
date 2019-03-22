<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class ShowController extends Controller
{
  /*  public function show(){
      $posts = Post::orderBy('created_at','desc')->paginate(10);
      return view('posts.index')->with('posts', $posts);
    } */

    public function index()
    {

        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    public function getSingle($slug) {


      $post = Post::where('slug', '=', $slug)->first();
      return view('posts.show')->withPost($post);
    }


}
