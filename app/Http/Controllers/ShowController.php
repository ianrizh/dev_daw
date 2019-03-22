<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class ShowController extends Controller
{
    public function show($id){
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }
}
