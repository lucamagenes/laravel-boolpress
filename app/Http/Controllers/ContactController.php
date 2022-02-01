<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MarkDownContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show_contact_page()
    {
        return view('guest.contacts.form');
    }

    public function store(Request $request)
    {
        $val_data = $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required|email',
            'message' => 'required|min:50|max:500',
        ]);

        //ddd($val_data);

        $contact = Contact::create($val_data);

        /* utilizzando il markdown di laravel */
        //return (new MarkDownContactFormMail($val_data))->render();

        //return (new SendContactFormMail($val_data))->render();
        //Mail::to('admin@example.com')->send(new SendContactFormMail($val_data));

        Mail::to('admin@example.com')->send(new MarkDownContactFormMail($contact));
        return redirect()
            ->back()
            ->with('message', 'Thanks for your message we will never get back to you!');
    }
}
