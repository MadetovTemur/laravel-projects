<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class SupportController extends Controller
{
    //

    public function save_message(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|email|min:4|max:255',
            'subject' => 'required|min:4|max:255',
            'message' => 'required|min:2|max:255'
        ]);

        $contact = new Contact();
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();
        // dd($request, $contact);

        return redirect()->route('support');
    }

}
