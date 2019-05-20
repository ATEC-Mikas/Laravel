<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\News;

class NewsController extends Controller
{
    function index() {
        return view("/news/index")->with("news",News::orderBy("date","desc")->get());
    }

    function show($id) {
        $new=News::Find($id);

        if(!isset($new))
            return redirect("/news");

        return view("/news/show")->with("news",$new);

    }
}
