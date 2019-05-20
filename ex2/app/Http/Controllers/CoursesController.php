<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    function index() {
        return view("/courses/index")->with("courses",Course::all());
    }

    function show($id) {
        $c= Course::find($id);
        if(!isset($c))
            redirect("/courses");

        return view("/courses/show")->with("course",$c);
    }
}
