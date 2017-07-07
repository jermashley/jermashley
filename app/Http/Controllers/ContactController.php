<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // dd($request->all());
        Mail::to('jeremiah.ashley@live.com')->send(new Contact((object)$request->all()));

        \Session::flash('contactConfirm', 'Thank you for contacting me! I will get in touch with you as soon as possible.');

        return redirect('contact');
    }
}