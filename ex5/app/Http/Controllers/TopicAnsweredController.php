<?php

namespace App\Http\Controllers;

use App\Topic_Answered;
use Illuminate\Http\Request;

class TopicAnsweredController extends Controller
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
     * @param  \App\Topic_Answered  $topic_Answered
     * @return \Illuminate\Http\Response
     */
    public function show(Topic_Answered $topic_Answered)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic_Answered  $topic_Answered
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic_Answered $topic_Answered)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic_Answered  $topic_Answered
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic_Answered $topic_Answered)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic_Answered  $topic_Answered
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic_Answered $topic_Answered)
    {
        //
    }
}
