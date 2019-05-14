<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class ContactosController extends Controller
{
    function index() {
        return view("contacto/index");
    }
    function create() {
        $r = ["nome" => request()->post("nome","vazio"),
        "email" => request()->post("email","vazio"),
        "mensagem" => request()->post("mensagem","vazio")];
        
        return redirect("/contacto/resposta")->with("resposta",$r);
    }
    function show() {
        if(session("resposta")!=null)
            return view("/contacto/resposta")->with("resposta",session("resposta"));
        else 
            return redirect("/contacto");
    }
}
