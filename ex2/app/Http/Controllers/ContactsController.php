<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactsController extends Controller
{
    function index() {
        return view("/contacts/index")->with("contacts",Contact::all());
    }

    function show($id) {
        $c = Contact::find($id);
        if(!isset($c))
            return redirect("/contacts");

        return view("/contacts/show")->with("contact",$c);
    }

    function create() {
        $c = new Contact();
        $c->name=request()->post("name","vazio");
        $c->email=request()->post("email","vazio");
        $c->message=request()->post("message","vazio");
        $c->save();
        return redirect("/contacts");
    }

    function edit($id) {
        
        $c = Contact::find($id);
        if(!isset($c))
            return redirect("/contacts");

        return view("/contacts/edit")->with("contact",$c);
    }

    function update($id) {
        $c = Contact::find($id);
        if(!isset($c))
            return redirect("/contacts");
        
        $c->name=request()->put("name","vazio");
        $c->email=request()->put("email","vazio");
        $c->message=request()->put("message","vazio");
        $c.save();
        return redirect("/contacts");
    }
}
