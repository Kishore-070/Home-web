<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\contactusMail;

class contactusController extends Controller
{
    public function contactform()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $contents=[
            'firstname' => $request->firstname,
            'lastname'  => $request->lastname,
            'Email'     => $request->Email,
            'phonenumber'=> $request->phonenumber,
            'Subject'   => $request->Subject,
            'Comment'   => $request->Comment
        ];

        Mail::to('kishorechand473@gmail.com')->send(new contactusMail($contents));
        return back()->with('feedback','Thank you for contacting us   your message has been sent successfully');
    }
}
