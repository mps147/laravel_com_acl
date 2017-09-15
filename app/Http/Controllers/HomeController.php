<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        $posts = $post->all();
        
        return view('home', compact("posts"));
    }
    
    public function update($idPost){
        $post = Post::find($idPost);
        
        $this->authorize("update-post", $post);
        
        return view("post-update", compact("post"));
    }
}
