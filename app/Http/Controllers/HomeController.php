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
    
    public function rolesPermissions(){
        echo "<h1>". auth()->user()->name . "</h1>";
        
        foreach( auth()->user()->roles as $role ){
            echo "<b>{$role->name}</b> = ";
            
            $permissons = $role->permissions;            
            foreach( $permissons as $permission ){
                echo "$permission->name,";
            }
            
            echo "<hr/>";
        }
    }
}
