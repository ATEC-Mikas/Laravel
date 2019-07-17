<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");            
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with("User")->orderBy("created_at","desc")->paginate(5);
        return view("posts.index")->with(compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "desc" => "required",
            "image" => "required"
        ]);
        $filename = $request->file('image')->getClientOriginalName();
        $fileext = $request->file('image')->getClientOriginalExtension();
        $image = md5($filename.Auth::user()->name.date("Y-m-d H:i:s")).".".$fileext;
        $request->file('image')->storeAs("/public/images/posts", $image);

        $post = new Post();
        $post->desc = $request->desc;
        $post->image = $image;
        $post->user_id = Auth::user()->id;
        $post->save();
        

        return redirect("/posts");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function user(User $user)
    {
        $posts = Post::where("user_id", "=", $user->id)->orderBy("created_at","desc")->orderBy("votes","desc")->paginate(5);
        return view("posts.user")->with(compact("posts"))->with(compact("user"));
    }
    
    public function ajax(Post $post) 
    {
        return view("posts._vote")->with(compact("post"));
    }
}
