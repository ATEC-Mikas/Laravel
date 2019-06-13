<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Topic_Answered;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("topic.index")->with("topics",Topic::orderBy("open","desc")->orderBy("created_at","desc")->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("topic.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "text" => "required|min:10",
            "title" => "required|min:10",
        ]);
        $topic = new Topic();
        $topic->title =request()->post('title');
        $topic->text =request()->post('text');
        $topic->user_id= Auth::user()->id;
        $topic->save();
        return redirect("topics/".$topic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        $answered=count(Topic_Answered::all()->where('user_id',Auth::user()->id)->where('topic_id',$topic->id))!=0 ||
        $topic->user_id == Auth::user()->id;
        return view("topic.show")->with(compact("topic"))->with(compact("answered"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        $topic->open=!$topic->open;
        $topic->save();
        return redirect("/topics/".$topic->id);
    }
}
