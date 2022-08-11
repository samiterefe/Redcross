<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use  Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts  = Post::latest()->paginate(5);
        return view('dashboard', compact('posts'));

        
    }

    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        
       
        return view('news/createNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $validatedData = $request->validate([
            'post_title' => 'required',
            'post_image' => 'required|mimes:jpg,jpeg,png',
            'post_body' => 'required'   



        ],[
            // 'brand_name.required'=> 'Please Input Brand Name ',//my own
            // 'brand_image.min' =>'No appropriate file',
        ]);

        $post_image = $request->file('post_image');

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($post_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $img_location = 'images/posts/';
        $last_img = $img_location.$img_name;
        $post_image->move($img_location,$img_name);



        Post::create([
            'post_title' => $request->post_title,
            'post_body' => $request->post_body,
            'post_image' =>$last_img,
            'created_at' =>Carbon::now()
        ]);

        $posts  = Post::latest()->paginate(5);
        return view('dashboard', compact('posts'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
