<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class NewsController extends Controller
{
    //
    public function index()
    {
        $posts  = Post::latest()->paginate(7);
        return view('news/newspost', compact('posts'));

        
    }

    public function read( $id)
    {
        $posts  = Post::find($id);
        return view('news/read', compact('posts'));

        
    }
    public function home()
    {
        $posts  = Post::latest()->paginate(4);
        return view('welcome', compact('posts'));

        
    }
    public function readhome( $id)
    {
        $posts  = Post::find($id);
        return view('news/read', compact('posts'));

        
    }

}
