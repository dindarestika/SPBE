<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\VisitorContact;

class EmailController extends Controller
{
    public function create()
    {
        return view('Landingpage.contact',[
            "title" => "Contact"]);
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content
        ];

        Mail::to('dindarestika@gmail.com')->send(new VisitorContact($data));

        /*
        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });
        */

        return back()->with(['message' => 'Email successfully sent!']);
    }
}