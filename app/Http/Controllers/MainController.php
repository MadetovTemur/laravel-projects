<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class MainController extends Controller
{


    public function index():object
    {
        // dd(gettype(view('home')));
        return view('home');
    }



    public function about()
    {
       return view('about');
    }

    public function support()
    {
        $contact = new Contact();

        // dd($contact->all());
        return view('support', ['contacts' => $contact->all()]);
    }
}
