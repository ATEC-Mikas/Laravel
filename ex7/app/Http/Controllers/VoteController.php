<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class VoteController extends Controller
{
    private function UpdateVotes($post_id) {
        $result = 0;
        $votes = Vote::where("post_id","=",$post_id)->get();
        foreach($votes as $vote) {
            $result += $vote->value;
        }
        $post = Post::find($post_id);
        $post->votes = $result;
        $post->save();
    }

    private function CheckVote($post_id, $value = null) {
        if($value == null) {
            return Vote::where("user_id","=",Auth::user()->id)
            ->where("post_id","=",$post_id)->count() > 0;
        } else {
            return Vote::where("user_id","=",Auth::user()->id)
            ->where("post_id","=",$post_id)
            ->where("value", "=" , $value)->count() > 0;
        }
    }

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }

    public function up($id) {
        if(!$this->CheckVote($id)) {
            $vote = new Vote();
            $vote->user_id = Auth::user()->id;
            $vote->post_id = $id;
            $vote->value = 1;
            $vote->save();
        } else {
            if($this->CheckVote($id,1)) {
                Vote::destroy(Vote::where("user_id","=",Auth::user()->id)
                ->where("post_id","=",$id)->get()[0]->id);
            } else {
                $vote = Vote::where("user_id","=",Auth::user()->id)
                        ->where("post_id","=",$id)->get();
                $vote[0]->value = 1;
                $vote[0]->save();
            }
        }
        $this->UpdateVotes($id);
        return redirect("/posts");
    }

    public function down($id) {
        if(!$this->CheckVote($id)) {
            $vote = new Vote();
            $vote->user_id = Auth::user()->id;
            $vote->post_id = $id;
            $vote->value = -1;
            $vote->save();
        } else {
            if($this->CheckVote($id,-1)) {
                Vote::destroy(Vote::where("user_id","=",Auth::user()->id)
                ->where("post_id","=",$id)->get()[0]->id);
            } else {
                $vote = Vote::where("user_id","=",Auth::user()->id)
                        ->where("post_id","=",$id)->get();
                $vote[0]->value = -1;
                $vote[0]->save();
            }
        }
        $this->UpdateVotes($id);
        return redirect("/posts");
    }


}
