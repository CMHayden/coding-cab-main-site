<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mailgun\Mailgun;

class ContactController extends Controller
{
    public function store (Request $request){

        $email      = $request->email;
        $message    = $request->message;
        $name    = $request->name;

        if ($message == "" || $email == "" || $name == "") {
            return response()->json("Invalid input", 422);
        }

        $mg = Mailgun::create(env('MAILGUN_SECRET'));

        $mg->messages()->send(env('MAILGUN_DOMAIN'), [
            'from'      => "$name <$email>",
            'to'        => env('TO_EMAIL'),
            'subject'   => 'Message from Contact Form',
            'text'      => "$message"
        ]);

        return view('confirmation');
    }
}
