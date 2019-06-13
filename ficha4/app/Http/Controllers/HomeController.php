<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function quiz()
    {
        if(Auth::user()->answered) 
            return redirect('/');
        return view ('home.quiz')->with("cities",City::all());
    }

    public function storequiz()
    {
        if(Auth::user()->answered) 
            return redirect('/');

        Auth::user()->city = City    
        return view ('home.quiz')->with("cities",City::all());
    }
}
