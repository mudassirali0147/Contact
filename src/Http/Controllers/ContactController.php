<?php

namespace Nytrotech\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nytrotech\Contact\Models\Contact;
use Nytrotech\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->email,$request->message,$request->name));
    
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
